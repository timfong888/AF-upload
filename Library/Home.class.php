<?php
// Class to manage user home in My Home Webpage
// Template: home.tpl.php

class HomeForm extends QForm {

    protected $objUser;
    protected $givenContacts;
    protected $addedTargets;
    protected $TargetsRating;
    protected $addedAllies;
    protected $totalRequests;
    protected $dtgAllies;
	protected $UserAllies = array();
	protected $UserOffers = array();
	protected $UserTargets = array();
	protected $UserOfferAccounts = array('AccountIds' => array(), 'Accounts' => array());
	protected $UserTargetAccounts = array('AccountIds' => array(), 'Accounts' => array());
	
	protected $AlliesOffers = array();
	protected $AlliesTargets = array();
	
	protected $RecommendedOffers = array();
	protected $RecommendedTargets = array();
	protected $RecommendedRequests = array();
	
	protected $btnSave;
	protected $dtrRecommended;
	protected $dtrOffer;
	protected $dtrTarget;
	protected $offMidl;
	protected $alliMidl;
	protected $trgMidl;
	protected $reqMidl;
	protected $conMidl;

	protected function Form_Create() {
	
		if(isset($_SESSION['User']))
			$this->objUser = unserialize($_SESSION['User']);
					
		$offMin=0;
		$offMax=0;
		$alliMax=0;
		$alliMin=0;
		$trgMax=0;
		$trgMin=0;
		$reqMax=0;
		$reqMin=0;
		$conMax=0;
		$conMin=0;
		$cntAll=$this->objUser->CountAll();
		$allUser=$this->objUser->LoadAll();
		
		for ($i=0;$i<$cntAll;$i++)
		{
			$usrOff=$allUser[$i]->GetOfferAsOwnerArray();
			$offSum=count($usrOff);
						
			if($offSum>$offMax) $offMax=$offSum;
			if($offSum<$offMin) $offMin=$offSum;
			$offSum=0;
		}
		for ($i=0;$i<$cntAll;$i++)
		{
			$usrAlli=$allUser[$i]->GetUserAsAlliesArray();
			$alliSum=count($usrAlli);
						
			if($alliSum>$alliMax) $alliMax=$alliSum;
			if($alliSum<$alliMin) $alliMin=$alliSum;
			$alliSum=0;
		}
		for ($i=0;$i<$cntAll;$i++)
		{
			$usrTrg=$allUser[$i]->GetTargetAsUserArray();
			$trgSum=count($usrTrg);
						
			if($trgSum>$trgMax) $trgMax=$trgSum;
			if($trgSum<$trgMin) $trgMin=$trgSum;
			$trgSum=0;
		}
		for ($i=0;$i<$cntAll;$i++)
		{
			$usrReq=$allUser[$i]->GetTotalRequestsCount($allUser[$i]->Id);
			$reqSum=count($usrReq);
						
			if($reqSum>$reqMax) $reqMax=$reqSum;
			if($reqSum<$reqMin) $reqMin=$reqSum;
			$reqSum=0;
		}
		for ($i=0;$i<$cntAll;$i++)
		{
			$usrCon=$allUser[$i]->GetGivenContacts($allUser[$i]->Id);
			$conSum=count($usrCon);
						
			if($conSum>$conMax) $reqMax=$conSum;
			if($conSum<$conMin) $reqMin=$conSum;
			$conSum=0;
		}
		
		$conMidl=round(($conMax+$conMin)/2);
		$reqMidl=round(($reqMax+$reqMin)/2);
		$offMidl=round(($offMax+$offMin)/2);
		$trgMidl=round(($trgMax+$trgMin)/2);
		$alliMidl=round(($alliMax+$alliMin)/2);
		
		$this->givenContacts=$this->objUser->GetGivenContacts($this->objUser->Id);	
		
		$TargetResult = $this->objUser->GetAddedTargets($this->objUser->Id);
		$this->addedTargets=$TargetResult[0];
		$this->TargetsRating=$TargetResult[1];
		
		
		
		$this->addedAllies=$this->objUser->GetAddedAlliesCount($this->objUser->Id);	
		$this->totalRequests=$this->objUser->GetTotalRequestsCount($this->objUser->Id);	
		
		$this->UserAllies = $this->objUser->GetUserAsAlliesArray();
		$this->UserOffers = $this->objUser->GetOfferAsOwnerArray();
		$this->UserTargets = $this->objUser->GetTargetAsUserArray();
		
		for($i=0;$i<count($this->UserOffers);$i++)
		{
			$this->UserOfferAccounts['AccountIds'][] = $this->UserOffers[$i]->__get('AccountId');
			$this->UserOfferAccounts['Accounts'][] = $this->UserOffers[$i]->__get('Account');
		}
		
		for($i=0;$i<count($this->UserTargets);$i++)
		{
			$this->UserTargetAccounts['AccountIds'][] = $this->UserTargets[$i]->__get('AccountId');
			$this->UserTargetAccounts['Accounts'][] = $this->UserTargets[$i]->__get('Account');
		} 
		
		for($i=0;$i<count($this->UserAllies);$i++)
		{
			$TargetArray = $this->UserAllies[$i]->GetTargetAsUserArray();
			$OfferArray = $this->UserAllies[$i]->GetOfferAsOwnerArray();
			
			for($j=0;$j<count($TargetArray);$j++) {
				$this->AlliesTargets[] = array('AllyId' => $this->UserAllies[$i]->Id, 'Account' => $TargetArray[$j]);
				
				if(!in_array($TargetArray[$j]->__get('AccountId'), $this->UserOfferAccounts['AccountIds']))
					$this->RecommendedOffers[] = array('AllyId' => $this->UserAllies[$i]->Id, 'Account' => $TargetArray[$j], 'Link' => 'message_send');
			}
			
			for($j=0;$j<count($OfferArray);$j++) {
				$this->AlliesOffers[] = array('AllyId' => $this->UserAllies[$i]->Id, 'Account' => $OfferArray[$j]);
				
				if(!in_array($OfferArray[$j]->__get('AccountId'), $this->UserTargetAccounts['AccountIds']))
					$this->RecommendedTargets[] = array('AllyId' => $this->UserAllies[$i]->Id, 'Account' => $OfferArray[$j], 'Link' => 'message_request');
				else 
					$this->RecommendedRequests[] = array('AllyId' => $this->UserAllies[$i]->Id, 'Account' => $OfferArray[$j], 'Link' => 'message_request');
			}
		}
		$offerRand=array();
		$targetRand=array();
		$requestRand=array();
		for($j=0;$j<3&&$j<count($this->RecommendedOffers);$j++)
		{
			$col=count($this->RecommendedOffers)-1;
			$offerRand[]=$this->RecommendedOffers[rand(0,$col)];
		}
		for($j=0;$j<3&&$j<count($this->RecommendedTargets);$j++)
		{
			$col=count($this->RecommendedTargets)-1;
			$targetRand[]=$this->RecommendedTargets[rand(0,$col)];
		}
		for($j=0;$j<3&&$j<count($this->RecommendedRequests);$j++)
		{
			$col=count($this->RecommendedRequests)-1;
			$requestRand[]=$this->RecommendedRequests[rand(0,$col)];
		}

/* this section assigns the links to the array */

		$this->dtrOffer = new QDataRepeater($this);
		$this->dtrOffer->UseAjax = true;
		$this->dtrOffer->__set('TagName', 'span');
        $this->dtrOffer->Template =  __TEMPLATES__ .'/span_home_2.tpl.php';
		if(count($offerRand)!=0)
		{
			$this->dtrOffer->DataSource = $offerRand;
		}
		
		$this->dtrTarget = new QDataRepeater($this);
		$this->dtrTarget->UseAjax = true;
		$this->dtrTarget->__set('TagName', 'span');	
        $this->dtrTarget->Template =  __TEMPLATES__ .'/span_home.tpl.php';
		if(count($targetRand)!=0)
		{
			$this->dtrTarget->DataSource = $targetRand; 
		}
		
		$this->dtrRecommended = new QDataRepeater($this);
		$this->dtrRecommended->UseAjax = true;
		$this->dtrRecommended->__set('TagName','span');
       	$this->dtrRecommended->Template =  __TEMPLATES__ .'/span_home.tpl.php';
		if(count($requestRand)!=0)
		{
			$this->dtrRecommended->DataSource = $requestRand;
		}
	}
	
	protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
		
	}
}
?>