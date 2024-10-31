<?php



class runes {
	
	private $originalRunes;
	private $runeArray;
	
	function __construct() {
			
			$this->originalRunes = array(
	"1" => array("1","The Self","Mannaz","The starting point should always be the self, and a proper relationship with yourself is essential: on this depends that all other relationships may flow properly, including your relationship with the Great Mystery.\nThis is not a moment to look for praise about your achievements, nor is it the time to put all your attention in possible results. Do not judge and dont be intolerant. Remember the past and think about the future, but focus on the present. Try to live your ordinary life in an extraordinary manner.","runes/01theself.jpg"),
	"2" => array("2","Partnership","Gebo","Fortune smiles, and nice surprises will arrive unexpectedly. Something positive is on its way, something that is totally deserved. You will probably receive awards, maybe a promotion, an acknowledgement or a gift. There is hope and joy. There are fulfilled promises and dreams come true. There is grace and forgiveness.\nMaybe some type of partnership is about to be born. If this is the case, Gebo reminds you to keep your individuality: remember that true partnership occurs when two beings form a team, each one retaining their own singularity.","runes/02partnership.jpg"),
	"3" => array("3","Signals","Ansuz","This Rune advises you to expect the unexpected. It is a message that calls you towards change and renovation, maybe even towards a new life. There will be new relations, new links, new contacts created, and therefore it is recommended that you keep your eyes and ears open during meetings or casual encounters.\nOn the other hand, Ansuz reminds you that you must first love and nourish yourself before trying to love and nourish others: it is impossible to give what one does not have. This Rune reminds you to remind yourself.","runes/03signals.jpg"),
	"4" => array("4","Separation","Othila","This is the Rune of beneficial gain. It indicates a moment in which tangible preparation will yield tangible results. It is an excellent opportunity to learn, to become better, to expand. New acquisitions will be favoured.\nIt also introduces a time of blessings in which actions taken will very probably be successful and bring new and better opportunities for growth. This is a moment that, if recognized, will reward you with all kinds of important benefits for your development.","runes/04separation.jpg"),
	"5" => array("5","Strength","Uruz","This is the Rune of endings and new beginnings. It is a Rune of transition indicating that the life you have lived until now must change to make room for a new form. You might suffer the loss of something or someone with whom you hold strong emotional links. However, Uruz reminds you that it is an entirely natural process: death, fertilization, gestation and rebirth. The ashes fertilize the ground for future crops.\nLearn to adapt to the moment, using the strength of your masculinity or femininity as support, and look for the opportunity that hides behind the loss.","runes/05strength.jpg"),
	"6" => array("6","Initiation","Perth","This Rune is associated with the Phoenix, the mystical bird that consumes itself in the fire to later rise from its own ashes. Powerful forces of change and renovation are in movement.\nOn the side of the mundane, there will probably be surprises such as sudden gains or the start of an unexpected relationship. On the spiritual side, it is time to rise above yourself, above ordinary living, in order to acquire a wider vision. Perth reminds you that the external is unimportant, except when it is a reflection of the internal.","runes/06initiation.jpg"),
	"7" => array("7","Constraint","Nauthiz","Drawing this Rune indicates that there might be delays and changes in the direction of your actions. There are strong reasons to review your plans carefully. Restriction is necessary.\nNauthiz suggests to identify your Shadow, the dark side of your nature whch reflects to the outside in the form of weakness. Try to discover what is it within you that attracts misfortune to your life. Difficulties and failures, however, can teach us plenty about ourselves. If necessary, rectify your direction and restore your internal balance. Look for the positive side of adversity.","runes/07constraint.jpg"),
	"8" => array("8","Fertility","Inguz","This Rune represents the need to share, to be wanted, the search for similarities and an impulse towards harmony in personal relationships. It could well signal a new way, a new relationship, even a new life.\nInguz symbolizes the end of a time of lethargy, a liberation from tension and uncertainty. However, it is necessary to fertilize the ground for such liberation.\nKeep your feet on the ground and stay away from any undesirable influences. This is a good moment to complete any project pending in your life.","runes/08fertility.jpg"),
	"9" => array("9","Defense","Eihwaz","This Rune is related to the difficulties that arise at the beginning of a new life and the defenses that we build around us when facing the unknown. It often announces a time of waiting, and thus its main advice is patience. \nIt is recommended to foresee consequences before acting. Once your decision is totally clear, then you will be able to carry out the action with ease. Take advantage of this moment to put your house in order and to tend to your personal affairs.","runes/09defense.jpg"),
	"10" => array("10","Protection","Algiz","Opportunities and new challenges are characteristic of this Rune. With them, however, unwanted influences may arrive, and thus it becomes necessary to protect yourself. Here, your maximum protection is the right action at the right moment.\nIf you are experiencing pain, dont deny it or try to hide from what is happening. Observe it and learn from it, feel it and let it go: the more you allow yourself to feel it, the faster you will be able to release it. Algiz reminds you that you will grow, and being aware of this may be your best protection in moments of doubt.","runes/10protection.jpg"),
	"11" => array("11","Possessions","Fehu","This is the Rune of realization: an ambition satisfied, a love conquered, a reward received. It often signals the presence of abundant nourishment of all kinds, physical as well as spiritual.\nNevertheless, it reminds you that in moments of good fortune we run the risk of getting carried away by success, thus behaving imprudently. Fehu advises you to be aware of this so as to not let it happen.\nEnjoy your good fortune and dont forget to share it: the good will of feeding others is a sign of a well-fed being.","runes/11possessions.jpg"),
	"12" => array("12","Joy","Wunjo","This Rune announces a state of security and relaxation, a sense of well-being. Light is finally peeking through the clouds, fruits hang heavy on the branches, and bad times are finally staying behind.\nYou may see yourself surrounded by joy, pleasure and comfort both at home and outside. There is clarity and a new energy that will allow you to understand, to balance, to renew yourself and your personal relations.\nNecessary changes have already been carried out, and now you may rejoice and receive Wunjos blessings freely.","runes/12joy.jpg"),
	"13" => array("13","Harvest","Jera","This Rune often announces a fertile season, a happy coming to term. Jera is the Rune of beneficial results relating to any activity or interest that concerns you at this moment of your life. You have prepared the ground and planted the seed, and now you must cultivate it. Jera offers an incentive towards success.\nDont expect fast results, however. As with a harvest, a cultivation cycle or maturing process is needed to finally be able to recollect the fruits of your labour. You have done a good job, and now Jera advises you to persevere and to be patient.","runes/13harvest.jpg"),
	"14" => array("14","Opening","Kano","Fire often symbolizes intense emotions and passion. However, you are reminded that passion, like everything else, has two sides. Excessive passion could lead to destructive obsession, but on its positive side it can lead to creativity. A clarity of intent in your attitude is required in order to avoid falling into its negative side.\nIn the area of relationships, Kano announces a mutual opening. The torch of understanding is lit again for both, and the creative power of such fire could lead to great breakthroughs.","runes/14opening.jpg"),
	"15" => array("15","Warrior","Teiwaz","Masculine energy and the active principle are characteristic of this Rune, bringing as a result an anxiety to conquer. Teiwaz is the Rune of courage, dedication and absolute trust in ones own resources.\nIn situations on interpersonal relations or devotion to a cause, Teiwaz advises perseverance, at the same time reminding you that patience can sometimes be a kind of perseverance.\nLook within yourself and deeply analize the foundations of your life. By doing this, you may get to know and harness your deepest and most powerful resources.","runes/15warrior.jpg"),
	"16" => array("16","Growth","Berkana","This Rune indicates flowering and maturation, and is related to new forms. Growth can occur in everyday, family or interpersonal situations. The process of self-change is in movement and will be benefited.\nFor growth to occur freely, however, Berkana advises you to eliminate all resistances through a deep cleansing process. If necessary, ask for expert help to carry it out. Once resistance is cleared out through constancy and a proper attitude, then flowering can occur.","runes/16growth.jpg"),
	"17" => array("17","Movement","Ehwaz","This Rune signals a time of transition and transformation. It indicates changes of all kinds: of house, attitude, life, business directions or personal relations. Ehwaz informs you that you are required to face any necessary transition and to carry it out diligently.\nThere is a sense of continuous progress, a notion of growth that could well be related to a business venture or the development of an idea or project. There is much movement at hand. Now is the time to allow the old to die in order to make room for the new.","runes/17movement.jpg"),
	"18" => array("18","Flow","Laguz","The characteristics of this Rune are water, intuition and the ebb and flow of emotions, relations and vocations. Particularly, it announces the satisfaction of emotional needs.\nIn spite of the fact that everything flows appropriately at this moment, it often signals the need to cleanse, revalue, reorganize, recenter. It indicates that the intuitive aspect of your nature is awake, and therefore Laguz advises you to harness it.","runes/18flow.jpg"),
	"19" => array("19","Disruption","Hagalz","Maybe you find yourself surrounded by negative events apparently beyond your control. Drawing this Rune indicates the possibility of havoc or jolts in your reality, security, work, relations or beliefs.\nIt is necessary to realize that you are not at the mercy of external circumstances. I create my own reality. In other words, your own nature is creating what is happening, and therefore you are not helpless. Carefully examine the situations surrounding you and your own beliefs and attitudes towards them. Hagalaz informs you that you hold the solutions in your own hands.","runes/19disruption.jpg"),
	"20" => array("20","Journey","Raido","This Rune is related to communication and harmony of something made up of two elements. It often signals the possibility of a journey, be it in the physical world or to the depths of your being. Such journey could well be towards self-healing or self-change. Raido advises you to moderate any excess in your life.Maybe an unexpected union will occur in your life, or maybe you will reunite with someone close that you havent seen in a long time. Or maybe the reunion predicted by Raido refers to certain internal aspects in you that have been in conflict for some time.","runes/20journey.jpg"),
	"21" => array("21","Gateway","Thurisa","Thurisaz indicates the presence of new options opening before you. However, it is advised to stop in front of the gate before crossing it, to look at the road that led you up to here.\nThis Rune points toward the need of not acting yet, but to examine past experiences and circumstances before continuing towards success. It is not a moment to make decisions, but rather to strengthen your ability to wait. Review your past closely. Observe it, bless it, and let go of everything you need to let go of. Then cross the door.","runes/21gateway.jpg"),
	"22" => array("22","Breakthrough","Dagaz","Dagaz denotes important breakthroughs in relation to whatever concerns you. The moment is right and therefore success is assured. This is the Rune of radical trust, even if circumstances require you to jump to the void with apparently empty hands.\nIt often introduces an important time of prosperity and great results. However, you are reminded to pay attention and not allow yourself to be carried away or to behave carelessly in your new situation. Humility and generosity are advised.","runes/22breakthrough.jpg"),
	"23" => array("23","Standstill","Isa","Positive achievements are not probable at this moment. Activities are frozen and maybe all your plans are halted. Nevertheless, do not despair: this is the moment of gestation that precedes birth.\nThis pause is probably due more to external circumstances rather than internal. However, try to find what internal aspects keep you in this position and let them go. Clean, discard, let go of the past. This will help accelerate the thawing process.\nRemember that the seed sleeps under the ground during winter. Trust your own process and wait for the signs of Spring.","runes/23standstill.jpg"),
	"24" => array("24","Wholeness","Sowelu","This is a Rune of great power that indicates a moment of profound regeneration, a search for totality. It signals the need to become aware of your essence in order to express it in a creative manner, thus increasing your vital force. It also points to the need of admitting something that you have long denied, something that has remained under the shadows: now it is time to bring it out unto the light.\nIt might be prudent to stay away from a pressing situation, remembering that withdrawing at the right time is a sign of force and not of weakness.","runes/24wholeness.jpg"),
	"25" => array("25","Unknowable","Odin","The Blank Rune means the unknowable and unseen are active in your life at this time. In the beginning there was nothing, and in the end, nothing remains. Control can not be used on that which does not yet exist. As with the Fool in the Tarot, you may have to leap over the precipice into the void. But do so empty-handed and with utter faith. What becons is the creative power of the unknown.","runes/25unknowable.jpg")
);
		$this->runeArray = $this->originalRunes;
		shuffle($this->runeArray);
	}
	
	function returnOriginalArray() {
		return $this->originalRunes;	
	}
	
	function returnShuffled() {
		return ($this->runeArray);	
	}
	
	function drawRune($number = 1) {
		$returnRunes = array();
		for ($x = 0; $x < $number;$x++) {
			$returnRunes[] = $this->runeArray[$x];
		}
		return ($returnRunes);
	}
	
	function displayGraphicRune( $rune , $style="" ) {
		return '<div class="rune" id="rune_'.$rune[0].'" style="'.$style.'">'.$rune[0].'</div>';
	}
	
	function displayGraphicInfoRune ( $rune, $style="", $heading = "" ) {
		$tmpDisplay = '<a href="#" onclick="return false;" title="'.($heading != '' ? $heading . "\n\n" : '').'Germanic: '.$rune[2] . "\nEnglish: ".$rune[1] . "\n\nDefinition:\n".$rune[3] .'"  >'.$this->displayGraphicRune( $rune , $style).'</a>'."\n";
		return $tmpDisplay;
	}
	
	function displayRuneId ($runeId) {
		$tmpRune = $this->originalRunes[$runeId];
		return $this->displayRune($tmpRune);	
	}
	
	function displayRune( $rune ) {
		$tmpDisplay = $this->displayGraphicRune( $rune, "float:left;");
		$tmpDisplay .= '<div style="margin-left:70px; padding-top:10px;"><strong>Germanic Name: </strong>' . $rune[2] . "<br /><br>\n";
		$tmpDisplay .= '<strong>English Name: </strong>' . $rune[1] . "</div>\n";
		$tmpDisplay .= '<div style="clear:both;">&nbsp;</div>';
		$tmpDisplay .= '<div><strong>Meaning:</strong><br>'. str_replace("\n","<br><br />",$rune[3]) .'</div>';
		$tmpDisplay .= '<div style="clear:both;">&nbsp;</div>';
		return $tmpDisplay;
	}
	
	function drawOdinsRune() {
		$tmpDisplay = '';
		$tmpDisplay .= '<form name="drawodin_form" method="post" action="'.str_replace( '%7E', '~', $_SERVER['REQUEST_URI']).'">';
		$tmpDisplay .= '<input type="hidden" name="drawodin_process" value="y">';
		$tmpDisplay .= "<p>Think of a question or topic you would like guidance on... Then click on Draw Odin's Rune to receive your guidance...</p>";
		$tmpDisplay .= '<input type="submit" name="Submit" value="Draw Odin\'s Rune" />  ';
		$tmpDisplay .= '</form>';
		if (isset($_POST['drawodin_process']) && $_POST['drawodin_process'] == 'y') {
			$tmpDisplay .= $this->returnOdinsRune();
		}
		return $tmpDisplay;
	}
	
	function draw3Rune() {
		$tmpDisplay = '';
		$tmpDisplay .= '<form name="draw3_form" method="post" action="'.str_replace( '%7E', '~', $_SERVER['REQUEST_URI']).'">';
		$tmpDisplay .= '<input type="hidden" name="draw3_process" value="y">';
		$tmpDisplay .= "<p>Think of a question or topic you would like guidance on... Then click on Draw Three Rune Spread to receive your guidance...</p>";
		$tmpDisplay .= '<input type="submit" name="Submit" value="Draw Three Rune Spread" />  ';
		$tmpDisplay .= '</form>';
		if (isset($_POST['draw3_process']) && $_POST['draw3_process'] == 'y') {
			$tmpDisplay .= 	$this->returnPastPresentFuture();
		}
		return $tmpDisplay;
	}
	
	function drawCelticCross() {
		/*
Rune number 2 should be placed on top of rune 1 if this is possible. To read this layout follow this guide.

1 Expresses the matter or question at hand
2 Shows the forces that may hinder or oppose the matter or question at hand
3 Represents the underlying influences of the matter at hand or question
4 Shows the influences that are passing or coming to an end
5 Denotes the influences that may become important in the medium to long term
6 Represents the influences on the questioner in the near future
7 Represents the fears and negative feelings that the questioner may have
8 Denotes the outside influences of friends and/or family
9 Stands for the beliefs and hopes of the questioner
10 This rune shows the final outcome of the question or matter at hand
11 Further explination on final outcome
12 Further explination on final outcome
*/
		$tmpDisplay = '';
		$tmpDisplay .= "<p>Here are the meanings of the rune locations:
		<ol>
<li>Expresses the matter or question at hand</li>
<li>Shows the forces that may hinder or oppose the matter or question at hand</li>
<li>Represents the underlying influences of the matter at hand or question</li>
<li>Shows the influences that are passing or coming to an end</li>
<li>Denotes the influences that may become important in the medium to long term</li>
<li>Represents the influences on the questioner in the near future</li>
<li>Represents the fears and negative feelings that the questioner may have</li>
<li>Denotes the outside influences of friends and/or family</li>
<li>Stands for the beliefs and hopes of the questioner</li>
<li>This rune shows the final outcome of the question or matter at hand</li>
<li>Further explination on final outcome</li>
<li>Further explination on final outcome</li>
</ol></p>";
		$tmpDisplay .= '<form name="drawcelticcross_form" method="post" action="'.str_replace( '%7E', '~', $_SERVER['REQUEST_URI']).'">';
		$tmpDisplay .= '<input type="hidden" name="drawcelticcross_process" value="y">';
		$tmpDisplay .= "<p>Think of a question or topic you would like guidance on... Then click on Draw Expanded Celtic Cross Rune Spread to receive your guidance...</p>";
		$tmpDisplay .= '<input type="submit" name="Submit" value="Draw Expanded Celtic Cross Rune Spread" />  ';
		$tmpDisplay .= '</form>';
		if (isset($_POST['drawcelticcross_process']) && $_POST['drawcelticcross_process'] == 'y') {
			$tmpDisplay .= $this->returnCelticCross();
		}

		return $tmpDisplay;
		
	}

	function drawCustomSpread() {
		$returnHtml = '';

		$max_number = 25;

		$numberofrunes = ( isset( $_POST['numberofrunes'] ) ? (int)strip_tags($_POST['numberofrunes']) : '');

		$returnHtml .= '<div><form method="post">
		Number of runes to draw? <input type="text" name="numberofrunes" value="'.$numberofrunes.'"> <input type="submit" name="draw_runes" value="Draw Runes">
		</form></div>';

$error = '';
		if ($numberofrunes != '') {
			if ( is_integer( $numberofrunes ) ) {
				if ($numberofrunes < 1 || $numberofrunes > $max_number ) {
					$error .= 'Please make sure the number is less than or equal to '.$max_number.'.';
				}

			} else {
				$error .= 'Please check you entered an integer.<br>' . $numberofrunes ;
			}

		}

		if ($error != '') {
			$returnHtml .= '<div style="font-weight:bold; color: #ff0000">'.$error.'</div>';
		} else {
			//run script.
			$returnRune = $this->drawRune($numberofrunes);
			//$returnHtml .= "<pre>" . print_r($returnRune, true) . "</pre>";
			foreach ($returnRune as $spot => $rune ) {
				if ( !empty($rune) ) {
					$returnHtml .= "<h3>Rune Spot #". ( $spot + 1 ) ."</h3>";
					//$returnHtml .= "<pre>" . print_r($rune, true) . "</pre>";
					$returnHtml .= "<div>" . $this->displayRune( $rune ) . "</div>";
				} else {
					break;
				}
			}
		}

		return $returnHtml;
	}
	
	function returnCelticCross() {
					$returnRune = $this->drawRune(12);
				$tmpDisplay = '<style>
				#noborder,#noborder tr td,#noborder tr td table, #noborder tr td table tr td {
					border:none;
				}
				</style>';
				$tmpDisplay .= '<table id="noborder">';
				$tmpDisplay .= "<tr><td></td><td style='vertical-align:top;'>".$this->displayGraphicInfoRune( $returnRune[4], '' , '5. Denotes the influences that may become important in the medium to long term.' )."</td><td></td><td></td>
				<td rowspan='3' valign='top'><table style='margin-top:0px;'><tr><td>".$this->displayGraphicInfoRune( $returnRune[9], '' , '10. This rune shows the final outcome of the question or matter at hand.' )."</td><td>".$this->displayGraphicInfoRune( $returnRune[10], '' , '11. Further explination on final outcome.' )."</td><td>".$this->displayGraphicInfoRune( $returnRune[11], '' , '12. Further explination on final outcome.' )."</td></tr>
				<tr><td>".$this->displayGraphicInfoRune( $returnRune[8], '' , '9. Stands for the beliefs and hopes of the questioner.' )."</td></tr>
				<tr><td>".$this->displayGraphicInfoRune( $returnRune[7], '' , '8. Denotes the outside influences of friends and/or family.' )."</td></tr>
				<tr><td>".$this->displayGraphicInfoRune( $returnRune[6], '' , '7. Represents the fears and negative feelings that the questioner may have.' )."</td></tr></table></td></tr>";
				$tmpDisplay .= "<tr><td align='center'>".$this->displayGraphicInfoRune( $returnRune[3], '' , '4. Shows the influences that are passing or coming to an end.' )."</td><td align='center'>".$this->displayGraphicInfoRune( $returnRune[0], '' , '1. Expresses the matter or question at hand.' )."<br><div style='position:relative;margin-top:-20px;margin-bottom:30px;'>".$this->displayGraphicInfoRune( $returnRune[1], '    -webkit-transform: rotate(90deg);
		-webkit-transform-origin: left top;
		-moz-transform: rotate(90deg);
		-moz-transform-origin: left top;
		-ms-transform: rotate(90deg);
		-ms-transform-origin: left top;
		-o-transform: rotate(90deg);
		-o-transform-origin: left top;
		transform: rotate(90deg);
		transform-origin: left top;
	
		position: absolute;
		top: 0;
		left: 100%;
		white-space: nowrap;    
		font-size: 48px;' , '2. Shows the forces that may hinder or oppose the matter or question at hand.' )."</div><div style='clear:both;'>&nbsp;</div></td><td align='center'>".$this->displayGraphicInfoRune( $returnRune[5], '' , '6. Represents the influences on the questioner in the near future.' )."</td></tr>";
				$tmpDisplay .= "<tr><td></td><td>".$this->displayGraphicInfoRune( $returnRune[2], '' , '3. Represents the underlying influences of the matter at hand or question.' )."</td><td></td></tr>";
				$tmpDisplay .= "</table>";
				$tmpDisplay .= '<ol>';
				$tmpDisplay .= "<li><div><b>Expresses the matter or question at hand:</b><br>".$this->displayRune( $returnRune[0] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Shows the forces that may hinder or oppose the matter or question at hand:</b><br>".$this->displayRune( $returnRune[1] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Represents the underlying influences of the matter at hand or question:</b><br>".$this->displayRune( $returnRune[2] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Shows the influences that are passing or coming to an end:</b><br>".$this->displayRune( $returnRune[3] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Denotes the influences that may become important in the medium to long term:</b><br>".$this->displayRune( $returnRune[4] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Represents the influences on the questioner in the near future:</b><br>".$this->displayRune( $returnRune[5] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Represents the fears and negative feelings that the questioner may have:</b><br>".$this->displayRune( $returnRune[6] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Denotes the outside influences of friends and/or family:</b><br>".$this->displayRune( $returnRune[7] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Stands for the beliefs and hopes of the questioner:</b><br>".$this->displayRune( $returnRune[8] )."</div></li>";
				$tmpDisplay .= "<li><div><b>This rune shows the final outcome of the question or matter at hand:</b><br>".$this->displayRune( $returnRune[9] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Further explination on final outcome:</b><br>".$this->displayRune( $returnRune[10] )."</div></li>";
				$tmpDisplay .= "<li><div><b>Further explination on final outcome:</b><br>".$this->displayRune( $returnRune[11] )."</div></li>";
				$tmpDisplay .= '</ol>';
	
				for ($y=0; $y < count($returnRune); $y++) {
					$tmpCount = get_option('norserune_runecount_'.$returnRune[$y][0]);
					$tmpCount = $tmpCount + 1;
					update_option('norserune_runecount_'.$returnRune[$y][0], $tmpCount);
				}
				
			return $tmpDisplay;	
	}

	function returnPastPresentFuture() {
			$returnRune = $this->drawRune(3);
			$tmpDisplay = "<h3>The guidance you seek on the question or topic is...</h3>";
			$tmpDisplay .= "<table width='100%'><tr><th width='33%'>Past</th><th width='33%'>Present</th><th width='33%'>Future</th></tr>";
			$tmpDisplay .= "<tr><td align='center'>".$this->displayGraphicInfoRune( $returnRune[0], '' , 'Past: Past influences on the question.' )."</td><td align='center'>".$this->displayGraphicInfoRune( $returnRune[1], '' , 'Present: Present situation at current time.' )."</td><td align='center'>".$this->displayGraphicInfoRune( $returnRune[2], '' , 'Future: Future possibilities if nothing is done to change.' )."</td></tr>";
			$tmpDisplay .= "</table>";
			$tmpDisplay .= "<h2>Past Influences on the question: </h2>";
			$tmpDisplay .= $this->displayRune( $returnRune[0] );
			$tmpDisplay .= "<h2>Present situation at current time regarding the question: </h2>";
			$tmpDisplay .= $this->displayRune( $returnRune[1] );
			$tmpDisplay .= "<h2>Future possibilities if nothing is done regarding the question: </h2>";
			$tmpDisplay .= $this->displayRune( $returnRune[2] );
			
			for ($y=0; $y < count($returnRune); $y++) {
				$tmpCount = get_option('norserune_runecount_'.$returnRune[$y][0]);
				$tmpCount = $tmpCount + 1;
				update_option('norserune_runecount_'.$returnRune[$y][0], $tmpCount);
			}
		return $tmpDisplay;
	}
	
	function returnOdinsRune() {
			$returnRune = $this->drawRune(1);
			$tmpDisplay = "<h3>The guidance you seek on the question or topic is...</h3>";
			$tmpDisplay .= $this->displayRune( $returnRune[0] );
			$tmpCount = get_option('norserune_runecount_'.$returnRune[0][0]);
			$tmpCount = $tmpCount + 1;
			update_option('norserune_runecount_'.$returnRune[0][0], $tmpCount);
			
		return $tmpDisplay;		
	}
	
}


