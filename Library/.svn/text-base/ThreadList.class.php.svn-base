<?php
//require_once(__DATA_CLASSES__.'/Thread.class.php');
class ThreadListForm extends QForm {

	// Declare the DataGrid
	protected $dtgThreads;
	// Private variables 
	private $_user;
	private $_threadsList;

	protected function Form_Create() {
		/* grab user object from SESSION */
		$this->_user = unserialize($_SESSION['User']);
		/* Define datagrid with "From", "Date", "Subjest" and "Action" columns */
		$this->dtgThreads = new QDataGrid($this);
		$this->dtgThreads->CellPadding = 5;
		$this->dtgThreads->CellSpacing = 0;
		$this->dtgThreads->AddColumn(new QDataGridColumn(QApplication::Translate('Date'),    '<?= $_FORM->RenderDateTime($_ITEM) ?>', 'HtmlEntities=false'));
		$this->dtgThreads->AddColumn(new QDataGridColumn(QApplication::Translate('Ally'),    '<?= $_FORM->RenderAlly($_ITEM) ?>',     'HtmlEntities=false'));
		$this->dtgThreads->AddColumn(new QDataGridColumn(QApplication::Translate('Subject'), '<?= $_FORM->RenderSubject($_ITEM) ?>',  'HtmlEntities=false'));
		$this->dtgThreads->AddColumn(new QDataGridColumn(QApplication::Translate('Action'),  '<?= $_FORM->Action_Render($_ITEM) ?>',  'HtmlEntities=false'));
		/* Obtain all threads with current user */
		$aid = isset($_GET['aid']) ? intval($_GET['aid']) : null;
		if ($aid) {
			$condition = QQ::OrCondition(
				QQ::AndCondition(
					QQ::Equal(QQN::Thread()->SenderUserId, $this->_user->Id),
					QQ::Equal(QQN::Thread()->ReceiverUserId, $aid)
				),
				QQ::AndCondition(
					QQ::Equal(QQN::Thread()->SenderUserId, $aid),
					QQ::Equal(QQN::Thread()->ReceiverUserId, $this->_user->Id)
				)
			);
		} else {
			$condition = QQ::OrCondition(
				QQ::Equal(QQN::Thread()->SenderUserId, $this->_user->Id),
				QQ::Equal(QQN::Thread()->ReceiverUserId, $this->_user->Id)
			);
		}
		$this->_threadsList = Thread::QueryArray(
			$condition,
			QQ::Clause(
				QQ::Expand(QQN::Thread()->SenderUser),
				QQ::Expand(QQN::Thread()->ReceiverUser),
				QQ::Expand(QQN::Thread()->LastUser),
				QQ::OrderBy(QQN::Thread()->DateTime, false)
			)
		);
		/* Display threads list */
		$this->dtgThreads->SetDataBinder('dtgThreads_Bind');
		// Update the styles of all the rows, or for just specific rows
		// (e.g. you can specify a specific style for the header row or for alternating rows)
		// Note that styles are hierarchical and inherit from each other.  For example, the default RowStyle
		// sets the FontSize as 12px, and because that attribute is not overridden in AlternateRowStyle
		// or HeaderRowStyle, both those styles will use the 12px Font Size.
		$objStyle = $this->dtgThreads->RowStyle;
		$objStyle->BackColor = '#ffffff';
		$objStyle->FontSize = 12;

		$objStyle = $this->dtgThreads->AlternateRowStyle;
		$objStyle->BackColor = '#eeeeee';

		$objStyle = $this->dtgThreads->HeaderRowStyle;
		$objStyle->ForeColor = '#ffffff';
		$objStyle->BackColor = '#9900cc';
	}

	public function RenderDateTime(Thread $objThread) {
		return $objThread->DateTime->__toString('MMMM D, YYYY') . '<br />' . $objThread->DateTime->__toString('hh:mm zz');
	}
	
	/* Assign an action to User profile link */
	public function RenderAlly(Thread $objThread) {
		$ally = ($this->_user->Id == $objThread->ReceiverUserId) ? $objThread->SenderUser : $objThread->ReceiverUser;
		$cssClass = $objThread->LastUser->Id != $this->_user->Id ? 'messagereceive' : '';
		$link = sprintf('<a href="AllyProfile.php?aid=%s" class="%s">%s</a>', $ally->Id, $cssClass, $ally->FullName);
		return $link;
	}

	/* Assign an action to thread link */
	public function RenderSubject(Thread $objThread) {
		$cssClass = $objThread->LastUser->Id != $this->_user->Id ? 'messagereceive' : '';
		if($this->_user->Id == $objThread->ReceiverUserId) {
			$linkUrl = 'message_send.php';
			$messageType = MessageType::Reply;
		}
		else {
			$linkUrl = ($objThread->MessageTypeId == MessageType::Send) ? 'message_send.php' : 'message_request.php';
			$messageType = $objThread->MessageTypeId;
		}
		
	//	echo $objThread->MessageTypeId . ': ' . $linkUrl;

	//	echo $objThread->MessageTypeId . ': ' . $this->_user->Id .': '. $objThread->ReceiverUserId .':'  . $linkUrl. '<br>';

//		$messageType = $objThread->ReceiverUser->Id != $this->_user->Id ? 3 : 1;
		
		$ally = ($this->_user->Id == $objThread->ReceiverUserId) ? $objThread->SenderUser : $objThread->ReceiverUser;
		
//		$aId = 
		$link = sprintf('<a href="%s?type=%s&aid=%s&acid=%s" class="%s">%s</a>', $linkUrl, $messageType, $ally->Id, $objThread->AccountId, $cssClass, $objThread->Subject); 
		return $link;
	}

	/* Assign an action to "x" link */
	public function Action_Render(Thread $objThread) {
		// In order to keep track whether or not a Thread's Action has been rendered,
		// we will use explicitly defined control ids.
		$strControlId = 'actionLink' . $objThread->Id;
		// Let's see if the Link exists already
		$actionLink = $this->GetControl($strControlId);
		if (!$actionLink) {
			// Define the Link -- it's parent is the Datagrid (b/c the datagrid is the one calling
			// this method which is responsible for rendering the Link.  Also, we must
			// explicitly specify the control ID
			$actionLink = new QLinkButton($this->dtgThreads, $strControlId);
			$actionLink->Text = 'X';
			// We'll use Control Parameters to help us identify the Thread ID
			$actionLink->ActionParameter = $objThread->Id;
			// Let's assign a server action on click
			$actionLink->AddAction(new QClickEvent(), new QAjaxAction('actionLink_Click'));
		}
		// Render the link.  We want to *return* the contents of the rendered Link,
		// not display it.  (The datagrid is responsible for the rendering of this column).
		// Therefore, we must specify "false" for the optional blnDisplayOutput parameter.
		return $actionLink->Render(false);
	}

	protected function dtgThreads_Bind() {
		$this->dtgThreads->DataSource = $this->_threadsList;
	}

	protected function actionLink_Click($strFormId, $strControlId, $strParameter) {
		foreach ($this->_threadsList as $key => $objThread) {
			if ($objThread->Id == $strParameter) {
				unset($this->_threadsList[$key]);
			}
		}
		$this->dtgThreads_Bind();
	}

}
?>