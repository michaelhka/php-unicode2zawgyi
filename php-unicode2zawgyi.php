<?php

function uniToZg($output)
{
	$output = preg_replace('/၎င်း/u', '၎', $output);							//၎င်း

	$output = preg_replace('/ါ်/u', 'ၚ', $output);							//ဝါ်
	$output = preg_replace('/ိံ/u', 'ႎ', $output);							//တိံ 
	$output = preg_replace('/ဿ/u', 'ႆ', $output);							//ဿ
	$output = preg_replace('/ဏ္ဍ/u', '႑', $output);							//ဏ္ဍ
	$output = preg_replace('/ဍ္ဍ/u', 'ၮ', $output);							//ဍ္ဍ
	
	$output = preg_replace('/င်္([က-အဉ])([ေြ]*)/u', '$1$2ၤ', $output);		//င်္က
	$output = preg_replace('/ဍ္ဎ/u', 'ၯ', $output);							//ဍ္ဎ
	$output = preg_replace('/ဋ္ဌ/u', '႒', $output);							//ဋ္ဌ
	$output = preg_replace('/ဋ္ဋ/u', '႗', $output);							//ဋ္ဋ္ဋ
	$output = preg_replace('/ုံ/u', 'ံု', $output);							//ကုံ
	$output = preg_replace('/([က-အဉ])([ါ-ှ]*)ေ/u', 'ေ$1$2', $output);		//rearrange ကေ
	$output = preg_replace('/([က-အဉ])ြေ/u', 'ေф$1', $output);				//rearrange ကြေ
	$output = preg_replace('/([က-အဉ])ြ/u', 'ф$1', $output);					//rearrange ကြ
	
	$output = preg_replace('/္က/u', 'ၠ', $output);							//က္က
	$output = preg_replace('/္ခ/u', 'ၡ', $output);							//က္ခ
	$output = preg_replace('/္ဂ/u', 'ၢ', $output);							//ဂ္ဂ
	$output = preg_replace('/္ဃ/u', 'ၣ', $output);							//က္ဃ
	$output = preg_replace('/္စ/u', 'ၥ', $output);							//ပစ္စ
	$output = preg_replace('/([ကဃဆညဏတထဘယလဟအ])္ဆ/u', '$1ၦ', $output);		//ထ္ဆ
	$output = preg_replace('/([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])္ဆ/u', '$1ၧ', $output);		//ပစ္ဆ
	$output = preg_replace('/([က-အ])္ဃ/u', '$1ၣ', $output);				//က္ဃ
	$output = preg_replace('/္ဋ/u', 'ၬ', $output);							//က္ဋ
	$output = preg_replace('/္ဌ/u', 'ၭ', $output);							//သဏ္ဌာန်
	$output = preg_replace('/္ဏ/u', 'ၰ', $output);							//ဏ္ဏ
	$output = preg_replace('/([ကဃဆညဏတထဘယလဟအ])္တ/u', '$1ၱ', $output);	// အတ္တ
	$output = preg_replace('/([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])္တ/u', '$1ၲ', $output);		// န္တ
	$output = preg_replace('/([ကဃဆညဏတထဘယလဟအ])္ထ/u', '$1ၳ', $output);	// အထ္ထ
	$output = preg_replace('/([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])္ထ/u', '$1ၴ', $output);		// ပပ္ထ
	$output = preg_replace('/္ဒ/u', 'ၵ', $output);							//ဘဒ္ဒ
	$output = preg_replace('/္ဓ/u', 'ၶ', $output);							// ဗုဒ္ဓ
	$output = preg_replace('/္န/u', 'ၷ', $output);							// နန္န
	$output = preg_replace('/္ပ/u', 'ၸ', $output);							// သိပ္ပ
	$output = preg_replace('/္ဖ/u', 'ၹ', $output);							// သိပ္ဖ
	$output = preg_replace('/္ဗ/u', 'ၺ', $output);							// သိပ္ဗ
	$output = preg_replace('/([ကဃဆညဏတထဘယလဟအ])္ဘ/u', '$1ၻ', $output);	// အ္ဘ
	$output = preg_replace('/([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])္ဘ/u', '$1႓', $output);		// မ္ဘ
	$output = preg_replace('/္မ/u', 'ၼ', $output);							// သိပ္မ
	$output = preg_replace('/္လ/u', 'ႅ', $output);							// သိပ္မ
	$output = preg_replace('/ွ/u', 'ြ', $output);							//ခွ
	
	$output = preg_replace('/ျ/u', 'ц', $output);							//ကျ temp
	$output = preg_replace('/်/u', '္', $output);							//င်
	$output = preg_replace('/ц/u', '်', $output);							//temp -&gt; ကျ 
	
	$output = preg_replace('/ၤိ/u', 'ႋ', $output);							//ကင်္ကိ
	$output = preg_replace('/ၤီ/u', 'ႌ', $output);							//ခင်္ကီ 
	$output = preg_replace('/ၤံ/u', 'ၤ ံ', $output);						//ခင်္ကံ
	$output = preg_replace('/ိံ/u', 'ႎ', $output);	 
	//$output = preg_replace('/က/u', 'က', $output);	
	//$output = preg_replace('/က/u', 'က', $output);	
	
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ံု့/u', 'ႀ$1ံဳ႕', $output);	//ကြုံ့
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ံု/u', 'ႀ$1ံဳ', $output);		//ကြုံ
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ို့/u', 'ႀ$1ိဳ႕', $output);	//ကြို့
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ို/u', 'ႀ$1ိဳ', $output);		//ကြို
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ီု/u', 'ႀ$1ိဳ', $output);		//ကြီု - correction
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ံု့/u', 'ၿ$1ံဳ႕', $output);		//ခြုံ့
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ံု/u', 'ၿ$1ံဳ', $output);			//ခြုံ
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ို့/u', 'ၿ$1ိဳ႕', $output);		//ခြို့
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ို/u', 'ၿ$1ိဳ', $output);			//ခြို
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ီု/u', 'ၿ$1ိဳ', $output);			//ခြီု - correction
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ႎ/u', 'ႀ$1ႎ', $output);		//ကြိံ
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ၤ ံ/u', 'ႀ$1ၤ ံ', $output);	//င်္ကြံ
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ႎ/u', 'ၿ$1ႎ', $output);			//ခြိံ
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ၤ ံ/u', 'ၿ$1ၤ ံ', $output);		// င်္ခြံ
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ြ(ိ|ီ|ဲ|ံ|ၤ)/u', 'ႄ$1ြ$2', $output);		//ကြွိ 
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ြ(ိ|ီ|ဲ|ံ|ၤ)/u', 'ႃ$1ြ$2', $output);			//ခြွိ
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ြ/u', 'ႂ$1ြ', $output);		//ကြွ 
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ြ/u', 'ႁ$1ြ', $output);			//ခြွ
	$output = str_replace("ှ", "ွ", $output);
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ွိ/u', 'ၿ$1ႇိ', $output);		//ခြှိ
	
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ွ(ိ|ီ|ဲ|ံ)/u', 'ႀ$1ႇ$2', $output);		//ကြွိ ကြွီ ကြွဲ ကြွံ	
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ွ(ိ|ီ|ဲ|ံ)/u', 'ႂ$1ႇ$2', $output);		 //ခြွိ ခြွီ ခြွဲ ခြွံ 
	
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])([ိီဲံၤ])့/u', 'ႀ$1$2႕', $output);		//ကြိ့ ကြီ့ ကြဲ့ ကြံ့ သင်္ကြ့
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])([ိီဲံၤ])့/u', 'ၿ$1$2႕', $output);		 //ခြိ့ ခြီ့ ခြဲ့ ခြံ့ သင်္ခြ့
	
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])([ိီဲံၤ]{1})/u', 'ႀ$1$2', $output);		//ကြိ ကြီ ကြဲ ကြံ	 သင်္ကြ
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])([ိီဲံၤ]{1})/u', 'ၿ$1$2', $output);		 //ခြိ ခြီ ခြဲ ခြံ သင်္ခြ
	
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ု/u', 'ႀ$1ဳ', $output);		// ကြု
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ု/u', 'ၿ$1ဳ', $output);			// ခြု
	
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])ူ/u', 'ႀ$1ဴ', $output);		// ကြူ
	$output = preg_replace('/ф([ခဂငစဇဋဌဍဒဓနပဖဗမရဝဉ])ူ/u', 'ၿ$1ဴ', $output);			// ခြူ
	
	$output = preg_replace('/ို့/u', 'ို႔', $output);	 							//တို့
	
	$output = preg_replace('/န([ြၠ-ၣၥ-ၨၬၭၰ-ၼႅႊ႓႔])/u', 'ႏ$1', $output);			//နန္ဒ
	
	$output = preg_replace('/ွူ/u', 'ွဴ', $output);	
	$output = preg_replace('/ွု/u', 'ႈ', $output);
	
	$output = preg_replace('/ု့/u', 'ု႔', $output);								//	တု့
	$output = preg_replace('/ူ့/u', 'ူ႔', $output);								// အူ့
	
	$output = preg_replace('/ြွ/u', 'ႊ', $output);								//ရွှေ
	
	$output = preg_replace('/န([ိီဲံ]့)/u', 'န$1႔', $output);						//နဲ့
	$output = preg_replace('/့႔/u', '႔', $output);	
	
	$output = preg_replace('/်ူ/u', '်ဴ', $output); 								// ချူ
	$output = preg_replace('/်ု/u', '်ဳ', $output); 								// ချု
	$output = preg_replace('/်ွ/u', 'ွ်', $output);								//မျှ
	$output = preg_replace('/ြ([ံဲၤ]*)့/u', 'ြ$1႔', $output);	
	
	$output = preg_replace('/ф([ကဃဆညဏတထဘယလဟအ])/u', 'ၾ$1', $output);		// ကြ
	
	return hexDecode($output);
}

function hexDecode($str){
	$hex = array('\x{1000}', '\x{1001}', '\x{1002}', '\x{1003}', '\x{1004}', '\x{1005}', '\x{1006}', '\x{1007}', '\x{1008}', '\x{1009}', '\x{100A}', '\x{100B}', '\x{100C}', '\x{100D}', '\x{100E}', '\x{100F}', '\x{1010}', '\x{1011}', '\x{1012}', '\x{1013}', '\x{1014}', '\x{1015}', '\x{1016}', '\x{1017}', '\x{1018}', '\x{1019}', '\x{101A}', '\x{101B}', '\x{101C}', '\x{101D}', '\x{101E}', '\x{101F}', '\x{1020}', '\x{1021}', '\x{1022}', '\x{1023}', '\x{1024}', '\x{1025}', '\x{1026}', '\x{1027}', '\x{1028}', '\x{1029}', '\x{102A}', '\x{102B}', '\x{102C}', '\x{102D}', '\x{102E}', '\x{102F}', '\x{1030}', '\x{1031}', '\x{1032}', '\x{1033}', '\x{1034}', '\x{1035}', '\x{1036}', '\x{1037}', '\x{1038}', '\x{1039}', '\x{103A}', '\x{103B}', '\x{103C}', '\x{103D}', '\x{103E}', '\x{103F}', '\x{1040}', '\x{1041}', '\x{1042}', '\x{1043}', '\x{1044}', '\x{1045}', '\x{1046}', '\x{1047}', '\x{1048}', '\x{1049}', '\x{104A}', '\x{104B}', '\x{104C}', '\x{104D}', '\x{104E}', '\x{104F}', '\x{1050}', '\x{1051}', '\x{1052}', '\x{1053}', '\x{1054}', '\x{1055}', '\x{1056}', '\x{1057}', '\x{1058}', '\x{1059}', '\x{105A}', '\x{105B}', '\x{105C}', '\x{105D}', '\x{105E}', '\x{105F}', '\x{1060}', '\x{1061}', '\x{1062}', '\x{1063}', '\x{1064}', '\x{1065}', '\x{1066}', '\x{1067}', '\x{1068}', '\x{1069}', '\x{106A}', '\x{106B}', '\x{106C}', '\x{106D}', '\x{106E}', '\x{106F}', '\x{1070}', '\x{1071}', '\x{1072}', '\x{1073}', '\x{1074}', '\x{1075}', '\x{1076}', '\x{1077}', '\x{1078}', '\x{1079}', '\x{107A}', '\x{107B}', '\x{107C}', '\x{107D}', '\x{107E}', '\x{107F}', '\x{1080}', '\x{1081}', '\x{1082}', '\x{1083}', '\x{1084}', '\x{1085}', '\x{1086}', '\x{1087}', '\x{1088}', '\x{1089}', '\x{108A}', '\x{108B}', '\x{108C}', '\x{108D}', '\x{108E}', '\x{108F}', '\x{1090}', '\x{1091}', '\x{1092}', '\x{1093}', '\x{1094}', '\x{1095}', '\x{1096}', '\x{1097}', '\x{AAAA}','\x{0444}','ф');
	$uni = array('က', 'ခ', 'ဂ', 'ဃ', 'င', 'စ', 'ဆ', 'ဇ', 'ဈ', 'ဉ', 'ည', 'ဋ', 'ဌ', 'ဍ', 'ဎ', 'ဏ', 'တ', 'ထ', 'ဒ', 'ဓ', 'န', 'ပ', 'ဖ', 'ဗ', 'ဘ', 'မ', 'ယ', 'ရ', 'လ', 'ဝ', 'သ', 'ဟ', 'ဠ', 'အ', 'ဢ', 'ဣ', 'ဤ', 'ဥ', 'ဦ', 'ဧ', 'ဨ', 'ဩ', 'ဪ', 'ါ', 'ာ', 'ိ', 'ီ', 'ု', 'ူ', 'ေ', 'ဲ', 'ဳ', 'ဴ', 'ဵ', 'ံ', '့', 'း', '္', '်', 'ျ', 'ြ', 'ွ', 'ှ', 'ဿ', '၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉', '၊', '။', '၌', '၍', '၎', '၏', 'ၐ', 'ၑ', 'ၒ', 'ၓ', 'ၔ', 'ၕ', 'ၖ', 'ၗ', 'ၘ', 'ၙ', 'ၚ', 'ၛ', 'ၜ', 'ၝ', 'ၞ', 'ၟ', 'ၠ', 'ၡ', 'ၢ', 'ၣ', 'ၤ', 'ၥ', 'ၦ', 'ၧ', 'ၨ', 'ၩ', 'ၪ', 'ၫ', 'ၬ', 'ၭ', 'ၮ', 'ၯ', 'ၰ', 'ၱ', 'ၲ', 'ၳ', 'ၴ', 'ၵ', 'ၶ', 'ၷ', 'ၸ', 'ၹ', 'ၺ', 'ၻ', 'ၼ', 'ၽ', 'ၾ', 'ၿ', 'ႀ', 'ႁ', 'ႂ', 'ႃ', 'ႄ', 'ႅ', 'ႆ', 'ႇ', 'ႈ', 'ႉ', 'ႊ', 'ႋ', 'ႌ', 'ႍ', 'ႎ', 'ႏ', '႐', '႑', '႒', '႓', '႔', '႕', '႖', '႗', '်','ျ','ျ');
	
	return str_replace($hex,$uni,$str);
}

?>
