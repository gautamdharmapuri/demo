var srv_root = "http://srv.clickastro.com/widget/wpanchang/";
/* var srv_root = "http://192.168.0.216/php/test";*/
var cssFile = "av.tools.widget.v2.css";
var gwindowspath = 'http://rep.clickastro.com/';
var $ = function(id){ return new DomElm(id)};
var sun = 'Sun';
var moon = 'Moon';
var moonbackground ='';
var sunbackground = 'bbgrey';
var ecode =0;
var DomElm = function(id){ this.instance = document.getElementById(id); };
DomElm.prototype.setHTML = function(h){ this.instance.innerHTML = h; };
DomElm.prototype.clear = function(){ this.setHTML("");};

/*
	validClients holds the list of registered clients for the widget
	whenever a new client comes please add that client in the list 
	with the unique key for the client's domain
*/
var validClients = {
						/*astrovisiononline.com*/
						"50a3281569abfa264920037f898598a6" : {initScreen:'basic',width:150,height:254,chartStyle:1,region:'MAL',language:'ENG',key:'50a3281569abfa264920037f898598a6',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com',target2:'http://www.indianastrologysoftware.com'},
						/* clickastro.com */
						/*"4a3910877dd6ebf4ab8ed254705bb10a" : { initScreen:'basic',width:150,height:254,chartStyle:1,region:'MAL',language:'ENG',key:'4a3910877dd6ebf4ab8ed254705bb10a',link:'Malayalam Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'},	 */
						"4a3910877dd6ebf4ab8ed254705bb10a" : { initScreen:'basic',width:260,height:310,chartStyle:3,region:'SAK',language:'ENG',key:'4a3910877dd6ebf4ab8ed254705bb10a',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},
						/*mathrubhumi.com*/
						"192d9edf077c148bf1c4854c46ed3fa5" : { initScreen:'basic',width:150,height:254,chartStyle:1,region:'MAL',language:'ENG',key:'192d9edf077c148bf1c4854c46ed3fa5',link:'Malayalam Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'},
						/*hinduwebsite.com*/
						"92ae03d253bfbc0a1ef6076cc781e5d3" : { initScreen:'basic',width:150,height:254,chartStyle:3,region:'SAK',language:'ENG',key:'92ae03d253bfbc0a1ef6076cc781e5d3',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com',target2:'http://www.indianastrologysoftware.com'},
						/*indianastrologysoftware.com*/
						"98124e5a80f31c36fc5a06b783339eab" : { initScreen:'basic',width:150,height:254,chartStyle:1,region:'SAK',language:'ENG',key:'98124e5a80f31c36fc5a06b783339eab',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com',target2:'http://www.indianastrologysoftware.com'},
						/*astrosapna.com*/
						"11e926f59f0e130a5e978903ea526641" : { initScreen:'basic',width:150,height:254,chartStyle:3,region:'SAK',language:'ENG',key:'11e926f59f0e130a5e978903ea526641',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com',target2:'http://www.indianastrologysoftware.com'},
						/*soothsayers-india.com*/
						"7071b8fd1d1cee8b7a3e54c775abe5be" : { initScreen:'basic',width:150,height:254,chartStyle:3,region:'SAK',language:'ENG',key:'7071b8fd1d1cee8b7a3e54c775abe5be',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com',target2:'http://www.indianastrologysoftware.com'},
						/* local */
						"32c488f953ab1c4e5536fd76172a61a" : { initScreen:'basic',width:150,height:310,chartStyle:1,region:'MAL',language:'ENG',key:'32c488f953ab1c4e5536fd76172a615a',link:'Malayalam Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'},
						 /*zymic*/
						 "def83201c7c0653c8afc1d655d25e775" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'def83201c7c0653c8afc1d655d25e775',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},
						 /*local test*/
						 "c7ae445f1b642fec446727eac2e55ea9" : { initScreen:'basic',width:150,height:300,chartStyle:2,region:'MAL',language:'ENG',key:'c7ae445f1b642fec446727eac2e55ea9',link:'Indian Astrology Software',target1:'http://www.clickastro.com/',target2:'http://www.clickastro.com/'},
						 /*zymic 2*/
						 "9c1e17163a0edaf5009dd4ecd27d39a4" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'9c1e17163a0edaf5009dd4ecd27d39a4',link:'Astrology Software',target1:'http://www.clickastro.com/',target2:'http://www.clickastro.com/'},
						  "92ae03d253bfbc0a1ef6076cc781e5d3" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'92ae03d253bfbc0a1ef6076cc781e5d3',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.hinduwebsite.com/*/ ,
						"11e926f59f0e130a5e978903ea526641" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'11e926f59f0e130a5e978903ea526641',link:'Kundli Software',target1:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php'}  
/*http://www.astrosapna.com/link-partner.php*/ ,
						"018a2a9d4cf2ff91b79f47549b0294aa" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'TAM',language:'ENG',key:'018a2a9d4cf2ff91b79f47549b0294aa',link:'Tamil Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php'}  
/*http://www.koodal.com/horoscope/*/ ,
						"7071b8fd1d1cee8b7a3e54c775abe5be" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'7071b8fd1d1cee8b7a3e54c775abe5be',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.soothsayers-india.com/*/ ,
						"a28850913de079e08b83065b1d99c8f1" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'a28850913de079e08b83065b1d99c8f1',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.24dunia.com/*/ ,
						"8770799c1ceca8a4ac854bb24a797ccc" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'8770799c1ceca8a4ac854bb24a797ccc',link:'Malayalam Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php'}  
/*www.kerala.com*/ ,
						"3249a4ee378c20760fd67000a51f9a3a" : { initScreen:'basic',width:150,height:300,chartStyle:2,region:'SAK',language:'ENG',key:'3249a4ee378c20760fd67000a51f9a3a',link:'Panchang',target1:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php'}  
/*www.hindu-festivals.com/*/ ,
						"cbcc5e82b2114bfb05eb21ef41b39727" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'cbcc5e82b2114bfb05eb21ef41b39727',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'}  
/*http://www.hindujagruti.org/external-links/*/ ,
						"34558c2b04edd5eabb42800249389f3f" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'34558c2b04edd5eabb42800249389f3f',link:'Malayalam Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php'}  
/*www.123kerala.com*/ ,
						"0f3c0348579778ca535667aa0efc9ea1" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'0f3c0348579778ca535667aa0efc9ea1',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*www.srikumar.com/*/ ,
						"b0ae44959399685f30e976ff2d137f25" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'b0ae44959399685f30e976ff2d137f25',link:'Telugu Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/telugu-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/telugu-astrology-software.php'}  
/*http://andhrapradesh.com/*/ ,
						"e829a770e69b62238b02c20a1bc9bf3e" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'e829a770e69b62238b02c20a1bc9bf3e',link:'Gujarati Astrology Software',target1:'http://www.indianastrologysoftware.com/personal-astrology/gujarati-kundli-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/gujarati-kundli-software.php'}  
/*http://www.baroda.com/*/ ,
						"b9d7c14b03bd4a6ed5b1c3ceee95360c" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'b9d7c14b03bd4a6ed5b1c3ceee95360c',link:'Gujarati Astrology Software',target1:'http://www.indianastrologysoftware.com/personal-astrology/gujarati-kundli-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/gujarati-kundli-software.php'}  
/*http://www.ahmedabad.com/*/ ,
						"7a59ba1fc1e6470992d904f04d097950" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'7a59ba1fc1e6470992d904f04d097950',link:'Kannada Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/kannada-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/kannada-astrology-software.php'}  
/*http://www.kannada.com/*/ ,
"40d8e2e77f336aaa8dffa160aa4082f6" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'40d8e2e77f336aaa8dffa160aa4082f6',link:'Kannada Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/kannada-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/kannada-astrology-software.php'}  
/*http://www.bangalorebest.com/*/ ,
"a03b8faa13b82c03f0ebdebc1d358dd5" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'a03b8faa13b82c03f0ebdebc1d358dd5',link:'Panchangam',target1:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php'}  
/*chennaionline.com/*/ ,
"e6d3fbe594ee0fa16dd88d754b955d0b" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'e6d3fbe594ee0fa16dd88d754b955d0b',link:'Panchang',target1:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php'}  
/*http://www.hindunet.org/hindu_calendar/*/ ,
"3bc66b1e535df2cf0cc19fa0f38a2112" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'MAL',language:'ENG',key:'3bc66b1e535df2cf0cc19fa0f38a2112',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.kairaly.net/*/ ,
"9e6f2bcb95204b1c9d11947aca7403a2" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'9e6f2bcb95204b1c9d11947aca7403a2',link:'Panchangam',target1:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php'}  
/*http://hosuronline.com/*/ ,
"924ff9141e6a11a0120a48d93bb10fbd" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'924ff9141e6a11a0120a48d93bb10fbd',link:'Panchangam',target1:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php'}  
/*http://www.anytimechennai.com/*/ ,
"3604e1b3b779c22ae82999097157782f" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'3604e1b3b779c22ae82999097157782f',link:'Panchangam',target1:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php'}  
/*http://www.coimbatorepages.com/*/ ,
"4c806a73c9e787f797e68e08b9175f5b" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'4c806a73c9e787f797e68e08b9175f5b',link:'Panchangam',target1:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/panchangam-software.php'}  
/*http://www.coimbatorecity.com/*/ ,
"7117451721637cf893fa84d0119c3ae3" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'7117451721637cf893fa84d0119c3ae3',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.sringeri.net/*/ ,
"2b79311899c668d89ff4e9ea842ce40c" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'2b79311899c668d89ff4e9ea842ce40c',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://india.worldviewer.com/*/ ,
"75cb63cbb82005ea2146b66ce7bdf1f1" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'75cb63cbb82005ea2146b66ce7bdf1f1',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.astrojyoti.com/*/ ,
"552befe5a8e36d29367934b255d64f0e" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'552befe5a8e36d29367934b255d64f0e',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.riiti.com/*/ ,
"3e9e884eb451f7f01b1aeef0ba7eff5a" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'3e9e884eb451f7f01b1aeef0ba7eff5a',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.illuminatetoday.com/*/ ,
"cc7b549fb20924c545d226018b16a9a2" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'cc7b549fb20924c545d226018b16a9a2',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.vedicscholar.com/index.html*/ ,
"32e9bdd34dabea60667028cc665c0f37" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'32e9bdd34dabea60667028cc665c0f37',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.kamakoti.org/*/ ,
"4b98dada2e580ee44affe8e94b14c0c7" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'4b98dada2e580ee44affe8e94b14c0c7',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.sriramanamaharshi.org/*/ ,
"3f9a8ffc50405e7c697955c62ba87dd2" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'3f9a8ffc50405e7c697955c62ba87dd2',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.siddhayoga.org/centerslist*/ ,
"2f44c43489f6d10641252c4f1faa9acd" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'2f44c43489f6d10641252c4f1faa9acd',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.astroica.com/*/ ,
"cc81f93fea3dbabd2abcb8b7f07ee591" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'cc81f93fea3dbabd2abcb8b7f07ee591',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.mypanchang.com/*/ ,
"fcd86cfc5ba4e2b1c477d1a1277e5c29" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'fcd86cfc5ba4e2b1c477d1a1277e5c29',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.cyberastro.com*/ ,
"2ae5d959dbca54a3e39206386538effc" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'2ae5d959dbca54a3e39206386538effc',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.rudraksham.com/*/ ,
"4e46857b87e773c78fa3ce1b43d71e55" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'4e46857b87e773c78fa3ce1b43d71e55',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.askganesha.com/*/ ,
"e60700c341afd4bd2a991ea576bca4a0" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'e60700c341afd4bd2a991ea576bca4a0',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.surfindia.com/astrology/*/ ,
"34bcd99422f3f8eb01c4b35116882701" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'34bcd99422f3f8eb01c4b35116882701',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.pravasitoday.com/nri-helpline/astrology*/ ,
"455f32eddc576453746622e183901f06" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'455f32eddc576453746622e183901f06',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.india4u.com/horoscope/horoscope.asp*/ ,
"e29dfeb788c5a3842e22c83c8afc2040" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'e29dfeb788c5a3842e22c83c8afc2040',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.sriraghavendramutt.org*/ ,
"bef7296b9e09d645817a811d0c18eb2b" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'bef7296b9e09d645817a811d0c18eb2b',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://hindupad.com*/ ,
"4e4c55672e9d0b1819f14de62308dcf6" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'4e4c55672e9d0b1819f14de62308dcf6',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}  
/*http://www.eastwestdirectory.com/Astro/daily_summary.php*/,
							 /*zym 3*/
						 "7846b41820422dac4fc39a57475fbea5" : { initScreen:'basic',width:150,height:300,chartStyle:2,region:'SAK',language:'ENG',key:'7846b41820422dac4fc39a57475fbea5',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-software-widget.php',target2:'http://www.indianastrologysoftware.com/astrology-software-widget.php'},

						   /*http://www.deorastones.com/*/
						   "f31b168753b4959a92ba71a73613b984" : { initScreen:'basic',width:260,height:310,chartStyle:3,region:'SAK',language:'ENG',key:'f31b168753b4959a92ba71a73613b984',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},
							/* http://deepiar.page.tl*/
							"54e602f393415fd00a447bd753ae7bf2" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'54e602f393415fd00a447bd753ae7bf2',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},

							"6248d1797f0b90141d904548bece5485" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'TAM',language:'ENG',key:'6248d1797f0b90141d904548bece5485',link:'Tamil Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php'},/* http://www.chennaibest.com/*/
							
							"d1fb348eeab502635b7c66cf9d6e4437" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'TEL',language:'ENG',key:'d1fb348eeab502635b7c66cf9d6e4437',link:'Telugu Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/telugu-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/telugu-astrology-software.php'},/* http://www.hyderabadbest.com/*/
							"22102a74b5e7bcb2bc3250c6b756f4a3" : { initScreen:'basic',width:150,height:300,chartStyle:2,region:'SAK',language:'ENG',key:'22102a74b5e7bcb2bc3250c6b756f4a3',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}/* http://moneymarkets.net.in*/	 ,
							"8580e6a49c066fac4b053cf9bf8f0759" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'8580e6a49c066fac4b053cf9bf8f0759',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}/* http://www.adiitya.com/*/,
							"e33642264df5853f60933e346e0240d7" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'TEL',language:'ENG',key:'e33642264df5853f60933e346e0240d7',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},/* http://www.paderu.at.ua*/
							"148f25fd2075f4089b39deaad9228e42" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'148f25fd2075f4089b39deaad9228e42',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}/* www.srbm.co.za*/	,
						"ad5535ce146255560a225eb42f56dba3" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'ad5535ce146255560a225eb42f56dba3',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'}/* http://www.tinyinfonet.com*/	 ,
							"7f8883fba4961c51aba8b0ceffdeb992" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'7f8883fba4961c51aba8b0ceffdeb992',link:'Tamil Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php'}/* http://yogicpsychology-research.blogspot.com/*/,
								/***************************************************************************/
							
							"8e456a5aa3f1efd25c994aece096ebab" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'8e456a5aa3f1efd25c994aece096ebab',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php'},/* http://wisdomspeak.org/mantra*/
							"396b9e223a613630a6c81f5e29e68076" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'396b9e223a613630a6c81f5e29e68076',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'},/* http://bloggerstops.blogspot.com/*/
							"2461ab9f107ead40af783ee36505f367" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'2461ab9f107ead40af783ee36505f367', link:'Astrology Software', target1:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php'},/* http://astrologylalkitab.blogspot.com/*/
							"1c0d69f1831a0f7bd438bf11ecfabae2" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'TAM',language:'ENG',key:'1c0d69f1831a0f7bd438bf11ecfabae2',link:'Tamil Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/tamil-astrology-software.php'},/* www.raajayogam.com*/
							"a6a83af249c2e60538882c54483a63bc" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'a6a83af249c2e60538882c54483a63bc',link:'Malayalam Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/malayalam-astrology-software.php'},/* http://prayers-o.blogspot.com/*/
							"20330da8a73f52f6dfb32723f4a4eca3" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'20330da8a73f52f6dfb32723f4a4eca3',link:'Astrology Software', target1:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php', target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'},/* www.purebhakti.com*/
							"34687e2db84b0d710c8a7155320d7251" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'34687e2db84b0d710c8a7155320d7251',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php'},/* http://myastro.zzl.org/*/
							/***********/
							"ce43d09eb4ef8c0eac314004303fef89" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'TEL',language:'ENG',key:'ce43d09eb4ef8c0eac314004303fef89',link:'Telugu Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/telugu-astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/telugu-astrology-software.php'},/* http://tellenglish.blogspot.com/*/
							"8e456a5aa3f1efd25c994aece096ebab" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'8e456a5aa3f1efd25c994aece096ebab',link:'Astrology  Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'},/* http://www.wisdomspeak.org/mantra/*/
							"37319c3263cac1baebfacd556adff1fe" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'37319c3263cac1baebfacd556adff1fe',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'},/* www.b4blog.net*/
							/***********************************************************************************/
							"0fdc80ebd5338365bf8263541f04cdff" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'0fdc80ebd5338365bf8263541f04cdff',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},/* http://www.jramniwas.com*/
"10cad42c742413ccdeac2d40a0d061d6" : { initScreen:'basic',width:150,height:300,chartStyle:3,region:'SAK',language:'ENG',key:'10cad42c742413ccdeac2d40a0d061d6',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},/* http://eallinonestuff.blogspot.com/*/
"e8c60e1bda6bdca946d68669b6299dce" : { initScreen:'basic',width:150,height:300,chartStyle:2,region:'SAK',language:'ENG',key:'e8c60e1bda6bdca946d68669b6299dce',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/kundli-software.php'},/* http:\\vastuacademy.blogspot.com*/
/****************************************/

"1cc9c9855d6702c4af4060e79dffa1f6" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'1cc9c9855d6702c4af4060e79dffa1f6',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},/* www.mprnair.com*/

"e0691decf0b859468ad33ffd64060574" : { initScreen:'basic',width:150,height:300,chartStyle:2,region:'SAK',language:'ENG',key:'e0691decf0b859468ad33ffd64060574',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/personal-astrology/bengali-astrology-software.php',target2:'http://www.indianastrologysoftware.com/personal-astrology/bengali-astrology-software.php'},/* astroassam.webnode.com*/
"0fd9491227c2fc44c82e300630ac5f4a" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'0fd9491227c2fc44c82e300630ac5f4a',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},/* http://tantric-goddess.org*/

"2365329cc31140aa7e6ed6b522b6b101" : { initScreen:'basic',width:150,height:300,chartStyle:1,region:'SAK',language:'ENG',key:'2365329cc31140aa7e6ed6b522b6b101',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/',target2:'http://www.indianastrologysoftware.com/'},/* http://tantra-ifc-the-art-of-conscious-love.com*/

								"89770d9c105cf3b1724e56a960284f2e" : { initScreen:'basic',width:150,height:300,chartStyle:2,region:'SAK',language:'ENG',key:'89770d9c105cf3b1724e56a960284f2e',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php',target2:'http://www.indianastrologysoftware.com/astrology-pack/astrology-software.php'}/* http://www.vedicpatra.com*/


					};


/*	
	To make Cross domain ajax possible, dynamic script adding
	is done here using a JsonScript custom class
*/

var JSONScript = function(url)
{
	/* REST request path */
    this.fullUrl = url; 
    /* Keep IE from caching requests */
    this.noCacheIE = '&noCacheIE=' + (new Date()).getTime();
    /* Get the DOM location to put the script tag */
    this.headLoc = document.getElementsByTagName("head").item(0);
    /* Generate a unique script tag id */
    this.scriptId = 'JscriptId' + JSONScript.scriptCounter++;
};
JSONScript.scriptCounter = 1;
JSONScript.prototype.buildScriptTag = function () 
{

	/* Create the script tag */
	this.scriptObj = document.createElement("script");
	
	/*  Add script object attributes */
	this.scriptObj.setAttribute("type", "text/javascript");
	this.scriptObj.setAttribute("charset", "utf-8");
	this.scriptObj.setAttribute("src", this.fullUrl + this.noCacheIE);
	this.scriptObj.setAttribute("id", this.scriptId);
};


JSONScript.prototype.removeScriptTag = function () 
{
	/*  Destroy the script tag */
	this.headLoc.removeChild(this.scriptObj);  
};

JSONScript.prototype.addScriptTag = function () 
{
    /* Create the script tag	*/
	this.buildScriptTag();
    this.headLoc.appendChild(this.scriptObj);
};

var Element = function(type,att)
{
	/*
	The Element Object creates a Dom Element
	and sets the attributes for it that we supply.
	The create() function returns the object	*/

	this.instance = document.createElement(type);
	for(i in att)
	{	if(i =='html'){ this.instance.innerHTML = att[i];}
		else if(i =='class') this.instance.className = att[i]+"";
		else this.instance.setAttribute(i,att[i]);
	}
};

Element.prototype.create = function(){ return this.instance; };

var buildCssTag = function () 
{

	/* Create the script tag */
	cssScriptObj = document.createElement("link");
	
	/*  Add script object attributes */
	cssScriptObj.setAttribute("type", "text/css");
	cssScriptObj.setAttribute("charset", "utf-8");
	cssScriptObj.setAttribute("rel", "stylesheet");
	cssScriptObj.setAttribute("href", srv_root+''+cssFile);
	cssScriptObj.setAttribute("id", 'tag'+cssFile.replace(".",""));
	document.getElementsByTagName("head").item(0).appendChild(cssScriptObj);
};

/* ----------------------------------------------------------
				Widget Area Starts Here
--------------------------------------------------------------*/

var jObj = null; var cback = 'parseOutput';
var avWidget = null;
var options = { initScreen:'',width:0,height:0,chartStyle:0,region:'null',language:'null',key:'',link:'',target1:'',target2:'',clientid:''};
var wInput = null;
var astroData = null;
var curDate = new Date();
var ld = loading();
var sInput = {type:"Country",country:"",state:"",place:"",data:"",curIndex:0,curSCity:''};
var predictionOptions = {type:"Sun",sign:"Aries",signId:"1",caption:"Aries"};
var sunsigns=new Array("","Aries","Taurus","Gemini","Cancer","Leo","Virgo","Libra","Scorpio","Sagittarius","Capricorn","Aquarius","Pisces");
var moonsigns=new Array("","Mesha","Vrishaba","Mithuna","Karkata","Simha","Kanya","Thula","Vrischika","Dhanu","Makara","Kumbha","Meena");
var sunoneliner=new Array("","","","","","","","","","","","","");
var moononeliner=new Array("","","","","","","","","","","","","");
var targetElementId = null;

var inpSearch = '<div name="frm" onsubmit="return false;"><input type="text" class="prf_tbox pt11 fa" '+
				'onblur="doSearch(this)" id="tbsearch" name="tbsearch" value="**VL**" onclick="refreshSbox(this)" />'+
				'<input type="image"  src="'+srv_root+'images/dbullet_grey.gif" width="10" height="9" class="pl3 cp" '+
				'onclick=""/></div>';

var resTpl =	'<div class="pt11 fa">'+
				'<div class="blk b">**PLC**</div>'+
				'<div class="shim2px cb">&nbsp;</div>'+
				'<div class="w60 fl">Longitude : </div><div class="w60 fl">**LNG**</div>'+
				'<div class="w60 fl">Latitude : </div><div class="w60 fl">**LAT**</div>'+
				'<div class="w60 fl">Time Zone : </div><div class="w60 fl">**TZN**</div>'+
				'<div class="shim2px cb">&nbsp;</div>'+
				'<div class="cb">Time Correction : </div>'+
				'</div>';


var selTimeCorr = function()
{				
	aTc = [" Standard Time", "Summer Time (Daylight Saving Time)"," Double Summer Time", " War Time"];
	sel =		new Element('select',{id:"selTimeCorr",html:'','class':'prf_sel pt11 fa'}).create();
	for(var c=0;c<aTc.length;c++)
	{
		el = new Element('option',{'value':c+'',html:aTc[c]}).create();
		sel.appendChild(el);
	}
	return sel;
};

var refreshSbox = function(el)
{
	if(el.value.indexOf("Country") == 0 || el.value.indexOf("State") == 0 || el.value.indexOf("City") == 0)
	{
		sInput.type = el.value.replace(" ","");
		el.value="";
	}
};
var refreshRegion = function(src)
{
	options.region = src.value;
	src.parentNode.innerHTML = "Loading..";
	loadWidget('basic',true);
};
var selRegion = function()
{
	reg = ["Sakavarsha","Malayalam","Tamil","Telugu"];
	sel =		new Element('select',{id:"selRegion",html:'','class':'prf_sel pt11 fa', onchange:'refreshRegion(this);'}).create();
	s = false;
	for(var c=0;c<reg.length;c++)
	{
		if(astroData.header.regional.year_caption == reg[c]) s = true; else s = false;
		el = new Element('option',{'value':reg[c].substring(0,3).toUpperCase(),html:reg[c]}).create();
		if(s) el.setAttribute("selected","selected");
		sel.appendChild(el);
	}
	return sel;
};
var strSelRegion = function()
{
	dv = new Element('div',{html:''}).create();
	dv.appendChild(selRegion());
	return dv.innerHTML;
};

var doSearch = function(el)
{
	if(el.value.length == 0) return (el.value = sInput.type);
	
	if(sInput.type == "Finish"){ sInput.curSCity = sInput.place;}
	$('src_result').setHTML("<h3><cenetr>Loading..</center></h3>");
	try
	{
		lsrv =  "http://www.indianastrologysoftware.com/widget/wpanchang/location.search.v2.php?callBk=loadPlace&type="+sInput.type+"&value="+el.value+''+
				'&country='+sInput.country+'&state='+sInput.state+'&city='+((sInput.type != "Finish")?sInput.place :sInput.curSCity)+'&index='+sInput.curIndex;
		jObj = new JSONScript(lsrv); 
		jObj.addScriptTag();
	}
	catch(err)
	{
		//alert('1:' + err.description );
		error(err.description);
	}
};
var getNotFoundScreen = function()
{
	return	'<div><b>'+sInput.type+'</b> you searched is not found in the database!<br>'+
			'<a href="javascript:prepareSearch();">Search again</a></div>';
};
var getErrFoundScreen = function()
{
	return	'<div><b>Error :</b>The place you searched returns some invalid data!<br>'+
			'<a href="javascript:loadWidget(\'prfnc\',false);">Search again</a></div>';
};
var loadPlace = function(type,json)
{
	$('src_result').clear();
	if(json.list == '') return $('src_result').setHTML(getNotFoundScreen());
	if(type != "Display")
	{
		$('src_result').instance.appendChild(new Element("div",{'class':'b',html:'Select your '+sInput.type}).create());
		sInput.type = type;
		list = json.list.split(',');
		h = '';
		for(i=0;i<list.length;i++)		h += '<div class="cp src_link" title="'+list[i]+'" onclick="setPlace(\''+list[i]+'\','+i+')">&nbsp;&nbsp;'+Trimm(list[i],20)+'</div>';
		$('src_result').instance.appendChild(new Element("div",{'class':'',html:h}).create());
	}
	else
	{
		tpl = resTpl;
		sInput.data = json.list;
		var res = json.list.split('-');
		if(res[0].length < 3)
		{ $('src_result').instance.innerHTML = getErrFoundScreen(); return; }
		tpl = tpl.replace("**PLC**",sInput.place+' of '+sInput.state+' in '+sInput.country);
		tpl = tpl.replace("**LNG**",res[0]);
		tpl = tpl.replace("**LAT**",res[1]);
		tpl = tpl.replace("**TZN**",res[2]);
		$('src_result').instance.innerHTML += tpl;
		$('src_result').instance.appendChild(selTimeCorr());
		$('src_result').instance.appendChild(new Element('div',{html:'&nbsp;','class':'shim4px w60'}).create());
		btn = new Element('div',{align:'',html:'Save','class':'ml5 cp bttn tac b'}).create();
		btn.onclick = function(){changePlace()};
		$('src_result').instance.appendChild(btn);
	}
};
var setPlace = function(inp,idx)
{
	sInput.curIndex = idx;
	if(sInput.type == "State") sInput.country = inp;
	else if(sInput.type == "City") sInput.state = inp;
	else sInput.place = inp;
	prepareSearch();
};
var prepareSearch = function()
{
	if(sInput.type != "Finish")
	$("src_result").instance.innerHTML =	inpSearch.replace("**VL**",sInput.type);
	else
	{
		doSearch({value:sInput.place});
	}
	if(sInput.type == "Country")
	$("src_result").instance.innerHTML +=	'<div class="shim4px"></div>'+
											'<div class="ml5 pt11">Type atleast three '+
				'starting letters of the country you want to Search. <br> Then the result will be loaded "Here"</div>';
	if(sInput.type == "State")
	$("src_result").instance.innerHTML +=	'<div class="shim4px"></div>'+
											'<div class="ml5 pt11">Please Search for a state/province in <b>'+sInput.country+'</b></div>';
	if(sInput.type == "City")
	$("src_result").instance.innerHTML +=	'<div class="shim4px"></div>'+
											'<div class="ml5 pt11">Please Search for a place/city in <b>'+sInput.country+' > '+sInput.state+'</b></div>';
};

var changePlace = function()
{
	sInput.data += '-'+ $('selTimeCorr').instance.selectedIndex;
	try
	{	
		$('src_result').setHTML("<h3><cenetr>Saving..</center></h3>");
		lsrv =  ""+srv_root+"setcookie.php?callBk=loadWidgetEx&type=SET"+"&data="+sInput.data+''+
				'&country='+sInput.country+'&state='+sInput.state+'&city='+sInput.place;
				//alert(lsrv);
		jObj = new JSONScript(lsrv); 
		jObj.addScriptTag();
	}
	catch(err)
	{
		//alert('2:' + err.description );
		error(err.description);
	}
};

function setOptions(opt)
{
	//alert('obj : ' + opt);
	if((opt != null)&&(opt != ''))	for(i in options)
	  {
		  //alert(i + opt[i]);
		  options[i] = (typeof(opt[i])=="undefined") ? options[i] : opt[i];
		  //alert(i + ':' + options[i]);
	  }
	 else options = { initScreen:'basic',width:150,height:254,chartStyle:1,region:'SAK',language:'ENG',key:'98124e5a80f31c36fc5a06b783339eab',link:'Astrology Software',target1:'http://www.indianastrologysoftware.com',target2:'http://www.indianastrologysoftware.com'};
	$(targetElementId).instance.style.width = '148px';
	$(targetElementId).instance.style.height = '308px';
};
          
function getDateString(date)
{
	return date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
};
          
function getTimeString(date,type)
{
	hour = date.getHours();
	if(type == 12 && hour > 12) hour = hour - 12;
	return hour+':'+date.getMinutes();
};

function viewChart(url)
{
	var fl = null;
	if($('floatimage').instance == null)
	{
		fl	= new Element('input',{id:'floatimage',type:'image',src:url,'class':'floatimage'}).create();
		$(targetElementId).instance.appendChild(fl);
	}
	else fl = $('floatimage').instance;
	mleft = pMouse.x; mleft = (mleft > 300)? mleft - 220 : mleft;
	mtop = pMouse.y; mtop = (mtop > 300)? mtop - 220 : mtop;
	ofs = (pMouse.x > 300)? -20 : 20;

	fl.style.left =  mleft+ofs+ 'px';
	fl.style.top = mtop+ofs+ 'px';
	fl.style.display = "block";

};
function hideChart()
{
	if($('floatimage').instance != null ) $('floatimage').instance.style.display = "none";
};

function getPlaceData()
{
	//alert('placedata');
	try
	{
		lsrv = ""+srv_root+"location.wsrv.db.v1.php?callBk=parsePlace&key="+options.key;
		//alert(lsrv);
		jObj = new JSONScript(lsrv); 
		jObj.addScriptTag();
	}
	catch(err)
	{
		//alert('3:' + err.description );
		error(err.description);
	}
};

function testerr(txt)
{
			alert(txt);	
}
function parsePlace(jsonData) 
{     
	//alert('PP:' +jsonData.cityName);
	wInput = { date:getDateString(curDate),time:getTimeString(curDate,24),place:jsonData};

	if(options.language=='null')
	{
		//alert('null');
		options.language = 'ENG';
	}
	if(options.region=='null')
	{
		//alert('null');
		options.region = 'SAK';
	} 

	
	ipJ = '{ date:"'+wInput.date+'",time:"'+wInput.time+'",place:{name:"'+wInput.place.cityName+'",longitude:"'+wInput.place.longitude+'",latitude:"'+wInput.place.latitude+'",timezone:"'+wInput.place.timeZone+'",timecorrection:"'+wInput.place.timeCorrection+'"},language:\''+options.language+'\',region:\''+options.region+'\'}';
	jObj.removeScriptTag();  
	try
	{
		wsrv  = ''+srv_root+'av.tools.widget.php?callBack='+cback+'&json=true&ipJ='+ipJ; 
		//alert(wsrv);
		//document.write(wsrv);
		jObj = new JSONScript(wsrv); 
		jObj.addScriptTag();
	}
	catch(err)
	{
		//alert('4:' + err.description );
		error(err.description);
	}
	

} ; 

/*
	function to prepare input data and request
	webservice to return the astrology data
*/
function wProcess()
{
	if(!validateRequest())
	{
		//alert('oops!');
		return new Widget().unauthorisedAccess();
	}
	getPlaceData();
};
          
/*
	This function is called at the integration
	end. The target element's id and the widget 
	size, initial screen will be passed as options
*/
var avWidgetAstroCalendar = function(trgId)
{
	//alert('start');
	//flowlog('1');
	targetElementId = trgId;
	//buildCssTag();
	getoneliners();
	if(!validateRequest())
	{
		try
		{
			lsrv = ""+srv_root+"location.wsrv.db.v1.php?callBk=validateClient&req=crypt";
			//alert(lsrv);
			jObj = new JSONScript(lsrv); 
			jObj.addScriptTag();
		}
		catch(err)
		{
			//alert('5:' + err.description );
			error(err.description);
		}
	}
	else
	{
		ipJ = wProcess();
	}
};

var validateClient = function(key)
{
	//alert(key);
	jsonopt ='';
	if(key!='')
    	jsonopt = eval('(' + key + ')');
	setOptions(jsonopt);
	//setOptions(key);
	jObj.removeScriptTag(); 
	ipJ = wProcess();
	
};
function trim(s)
{
	//alert('function');
	//alert(s);
	var l=0; var r=s.length -1;
	while(l < s.length && s[l] == ' ')
	{	l++; }
	while(r > l && s[r] == ' ')
	{	r-=1;	}
	//alert('result:' + s.substring(l, r+1))
	return s.substring(l, r+1);
}

var validateRequest = function()
{
	//alert('1');
	var bld= $('avx_widget_148_bkl').instance;
	ecode = 8;
	//var anc = $('avx_widget_148_back_link').instance;
	ecode = 9;
	//aurl = anc.getElementsByTagName("a")[0].getAttribute("href").replace(new RegExp("/","g"),"");
	ecode = 10;
	if(window.opera) 
	{
	return true;
	}
	else if(bld != null)
	{	
		ecode = 1;
		/*if(options.initScreen == '' || options.chartStyle == 0 || options.region == 'null' || options.key == '')
		{
			url1 = "http://www.indianastrologysoftware.com".replace(new RegExp("/","g"),"");
			url2 = "http://www.indianastrologysoftware.com".replace(new RegExp("/","g"),"");
			anctext = "Astrology Software";
			
		}
		else
		{	*/
			url1 = options.target1.replace(new RegExp("/","g"),"");
			url2 = options.target2.replace(new RegExp("/","g"),"");
			anctext = options.link;
	//	}
		ecode = 2;
//		if(bld.style.display != "block") return false;
		ecode = 3;
//		if(anc.style.display != "block") return false;
		ecode = 4;
		
//		if(bld.className.replace(new RegExp(" ","g"),"") != "fapt10" ) return false; 
		ecode = 5;
//		if(anc.className.replace(new RegExp(" ","g"),"") != "back_link") return false;
		ecode = 6;
		//alert(aurl + ' != ' + url1 + '&& ' + aurl +' != ' + url2);
//		if(aurl != url1 && aurl != url2) return false;
		ecode = 7;
//		if(anc.innerHTML.indexOf(anctext) < 0) return false; 
		return true;
	}
	else 
	{
		return true;
	}

	return true;
};

/*
var validateRequest = function()
{
	//alert(options.key);
	var bld= $('avx_widget_148_bkl').instance;
	var anc = $('avx_widget_148_back_link').instance;
	//if(options.initScreen == '' || options.chartStyle == 0 || options.region == 'null' || options.key == '') return false;
	if(window.opera) return true;
	else if(bld != null)
	{	
		
		if(options.initScreen == '' || options.chartStyle == 0 || options.region == 'null' || options.key == '')
		{
			aurl = anc.getAttribute("href").replace(new RegExp("/","g"),"");
			url1 = "http://www.indianastrologysoftware.com".replace(new RegExp("/","g"),"");
			url2 = "http://www.indianastrologysoftware.com".replace(new RegExp("/","g"),"");
			anctext = "Astrology Software";
			
		}
		else
		{
			aurl = anc.getAttribute("href").replace(new RegExp("/","g"),"");
			url1 = options.target1.replace(new RegExp("/","g"),"");
			url2 = options.target2.replace(new RegExp("/","g"),"");
			anctext = options.link;
		}
		
		//alert('1');
		if(bld.style.display != "block") return false;
		//alert('2');
		if(anc.style.display != "block") return false;
		//alert('3');
		
		if(bld.className.replace(new RegExp(" ","g"),"") != "fapt10" ) return false; 
		//alert('4');
		if(anc.className.replace(new RegExp(" ","g"),"") != "back_link") return false;
		//alert('5:' + aurl + ':' + url1 + ':' + aurl + ':' + url2 );
		if(aurl != url1 && aurl != url2) return false;
		//alert('6');
		if(anc.innerHTML.indexOf(anctext) < 0) return false; 
		//alert('7');
		return true;
	}
	else return false;

	return true;
};		 */

/*var validateRequest = function()
{
	//alert(options.key);
	var bld= $('avx_widget_148_bkl').instance;
	var anc = $('avx_widget_148_back_link').instance;
	if(options.initScreen == '' || options.chartStyle == 0 || options.region == 'null' || options.key == '') return false;
	else if(window.opera) return true;
	else if(bld != null)
	{	
		aurl = anc.getAttribute("href").replace(new RegExp("/","g"),"");
		url1 = options.target1.replace(new RegExp("/","g"),"");
		url2 = options.target2.replace(new RegExp("/","g"),"");
		//alert('1');
		if(bld.style.display != "block") return false;
		//alert('2');
		if(anc.style.display != "block") return false;
		//alert('3');
		
		if(bld.className.replace(new RegExp(" ","g"),"") != "fapt10" ) return false; 
		//alert('4');
		if(anc.className.replace(new RegExp(" ","g"),"") != "back_link") return false;
		//alert('5:' + aurl + ':' + url1 + ':' + aurl + ':' + url2 );
		if(aurl != url1 && aurl != url2) return false;
		//alert('6');
		if(anc.innerHTML.indexOf(options.link) < 0) return false; 
		//alert('7');
		return true;
	}
	else return false;

	return true;
};*/

/*
	Call back function. This function will be 
	called at the webservice end with the JSON
	output. This function parses the output &
	presents it at the client.
*/
function parseOutput(jsonData) 
{     
	//alert(jsonData);
	astroData = jsonData.data;
	avWidget = new Widget().prepareCalendar(false);
	jObj.removeScriptTag(); 
}

/*-----------------------------------------------
		Widget Declaration
  -----------------------------------------------
		class		: Widget
		methods		: setOptions
					: prepareCalendar
					: showBasicScreen
					: showChartScreen
					: showSignificanceScreen
					: showPanchangaScreen
					: showCalendarScreen
  ----------------------------------------------*/
var chDate = function(d)
{
	if(d==NaN || d==0) return;
	curDate.setDate(d);
	avWidget = avWidget.prepareCalendar(true);
};
var prevDay = function()
{
	d = curDate.getDate()-1;
	curDate.setDate(d);
	avWidget = avWidget.prepareCalendar(true);
};
var nextDay = function()
{
	d = curDate.getDate()+1;
	curDate.setDate(d);
	avWidget = avWidget.prepareCalendar(true);
};
var loadChart = function(cs)
{
	options.chartStyle = cs;
	avWidget.showChartScreen();
};
var loadWidget = function(screen,doRef)
{
	options.initScreen = screen; 
	avWidget = avWidget.prepareCalendar(doRef);
};
var loadWidgetEx = function()
{
	options.initScreen = 'basic';
	avWidget = avWidget.prepareCalendar(true);
};
var Widget = function()
{
	this.targetId = targetElementId;
	this.jsonData = astroData;
};

function loading()
{
	return new Element('div',{'class':'avw_loading'}).create();
};

Widget.prototype.prepareCalendar = function(doRefresh)
{
	if(doRefresh)
	{ 
		return new avWidgetAstroCalendar(this.targetId);
	}
	switch(options.initScreen)
	{
		case 'basic': this.showBasicScreen(); break;
		case 'chart': this.showChartScreen(); break;
		case 'astro': this.showAstroScreen(); break;
		case 'signf': this.showSignificanceScreen(); break;
		case 'panch': this.showPanchangaScreen(); break;
		case 'clndr': this.showCalendarScreen(); break;
		case 'prfnc': this.showPreference(); break;
		case 'rgion': this.showRegionSet(); break;
		case 'frpred': this.showFreePredMenu(); break;
		case 'fullpred': this.showFreePredictions(); break;
		default		: this.showBasicScreen(this.trgId); break;
	}
	return this;
};
Widget.prototype.unauthorisedAccess = function()
{
	$(this.targetId).instance.childNodes[0].innerHTML ="";
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.uAAccess());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showBasicScreen = function()
{
	//$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.astroCal(false));
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkAstroDay());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkFreePredictions());
	frame.appendChild(this.shim1px());
	//$(this.targetId+'_content').instance.appendChild(frame);
	if ($(this.targetId).selector == 'astro_widget_home') {
        $('#astro_widget_home_content').html(frame);
    } else {
			$(this.targetId+'_content').instance.appendChild(frame);			
	}
};
Widget.prototype.showPanchangaScreen = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.panchanga());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkAstroDay());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkMain());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkFreePredictions());
	frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showChartScreen = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.chart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkDualChart(options.chartStyle));
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkAstroDay());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkFreePredictions());
	frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showSignificanceScreen = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.significance());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkAstroDay());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkMain());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkFreePredictions());
	frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showAstroScreen = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.astroday());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkMain());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkFreePredictions());
	frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showFreePredMenu = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.FreePredMenu());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkAstroDay());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkMain());
	frame.appendChild(this.shim1px());
	//frame.appendChild(this.linkFreePredictions());
	//frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showFreePredictions = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.FreePredictions());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkAstroDay());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkMain());
	frame.appendChild(this.shim1px());
	//frame.appendChild(this.linkFreePredictions());
	//frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showCalendarScreen = function()
{
	$(this.targetId+'_content').clear();
	var acal = createCalendarFor(getDateString(curDate));
	var y = '';
	for(j=0;j<7;j++)
	{
		d = dtpl.replace("**DT**",wlist[j].substring(0,1));
		d = d.replace("**CL**","wcaption fl "+((j==0)?"red":"blk")+" fa pt12 b");
		d = d.replace("**IP**",'0');
		y += d;
	}
	y += '<br class="cb"/>';
	for(i=0;i<5;i++)
	{
		for(j=0;j<7;j++)
		{
			d = (acal[i][j] == 0)? dtpl.replace("**DT**","") : dtpl.replace("**DT**",lpad(acal[i][j]+''));
			d = d.replace("**CL**",((acal[i][j] == 0)?"wcaption":"caldate cp")+" fl "+((acal[i][j] == curDate.getDate())?" bgrey " :"") +
				((j==0)?"red":"blk")+" "+((inArray(acal[i][j],astroData.special_days_of_month.list))?"block":"")
				+" fa pt12 b");
			d = d.replace("**IP**",acal[i][j]);
			y += d;
		}
		y += '<br class="cb"/>';
	}
	$(this.targetId).instance.childNodes[0].innerHTML ="";
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.lcalendar(y));
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkMain());
	frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);

};
Widget.prototype.showPreference = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.preference());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkMain());
	frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.showRegionSet = function()
{
	$(this.targetId+'_content').clear();
	frame = new Element('div',{id:'av_widget_148','class':'',html:''}).create();
	frame.appendChild(this.header());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.astroCal(true));
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkChart());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkPanchang());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkSpeciality());
	frame.appendChild(this.shim1px());
	frame.appendChild(this.linkAstroDay());
	frame.appendChild(this.shim1px());
	$(this.targetId+'_content').instance.appendChild(frame);
};
Widget.prototype.getCurChart = function()
{
	var lcs = ['','southindian','eastindian','northantique'];
	var cs =	'&sun='+astroData.chart.sun+
				'&moo='+astroData.chart.moon+
				'&mer='+astroData.chart.mercury+
				'&ven='+astroData.chart.venus+
				'&mar='+astroData.chart.mars+
				'&jup='+astroData.chart.jupiter+
				'&sat='+astroData.chart.saturn+
				'&rah='+astroData.chart.rahu+
				'&ket='+astroData.chart.ketu+
				'&gul='+astroData.chart.gulikan+
				'&lag='+astroData.chart.lagnam+
				'&style='+lcs[options.chartStyle]+'&rf='+
				new Date().getTime();
		
	
	url = gwindowspath + 'SMexe/WebStarChart.dll?width=220&height=220'+cs;
	return url;
};
Widget.prototype.uAAccess = function()
{
	var tpl =	'<div class="uaaceess blk"><div class="pt16 b warning">(!)Warning</div>'+
				'<div>&nbsp;</div>'+
				'<div class="red b pt16">Access Denied </div><br>'+
				''+
				'We think you are trying to access this widget from a domain '+
				'which is not registered with us. Or Your browser will not support this script.'+
	             ' Error Code: ' + ecode +'</div>' ;
	return new Element('div',{'class':'',html:tpl}).create();
};
Widget.prototype.header = function()
{
	var tpl =	'<div class="haeder"><div class="ddmmyy">'+
            	'	<div class="dateday fl">'+
                '		<div class="date fa">'+
				'    		<div class="date_p fl"><img alt="" src="'+srv_root+'images/p_left.gif" width="4" height="5" class="padt10 cp"/></div>'+
                '			<div class="date_dd fl ac b">'+lpad(curDate.getDate()+'')+'</div>'+
                '			<div class="date_n fr"><img alt="" src="'+srv_root+'images/n_right.gif" width="4" height="5" class="padt10 cp"/></div>'+
                '   	</div>'+
                '  		<div class="day ac b fa">'+wlist[curDate.getDay()].substring(0,3)+'</div>'+
                '	</div>'+
                '	<div class="month fl">'+
                '		<div class="month_p  ac"><img alt="" src="'+srv_root+'images/empty.gif" width="5" height="4" class="padt4" /></div>'+
                '		<div class="month_mm ac b fa"><span class=" cp"> <u>'+mlist[curDate.getMonth()].substring(0,3)+'</u></span></div>'+
                '		<div class="month_n ac"><img alt="" src="'+srv_root+'images/empty.gif" width="5" height="4" /></div>'+
                '	</div>'+
                '	<div class="year fr b ac fa">'+curDate.getFullYear()+'</div>'+
                    
       			'</div>'+
                '<div class="place ac fa grey pt10 cp">Place : <span class="b red pt12" >'+Trimm(wInput.place.cityName,15)+'</span></div>'+
				'</div>';
	return new Element('div',{id:'',html:tpl}).create();

};

Widget.prototype.significance = function()
{
	var tpl =   '<div class="resultbox">'+
                '<div class="resultbox_head ac fa pt12 b">'+astroData.significance_of_the_day.caption+'</div>'+
                '<div class="special_text pt11">'+
                '<span class="pt12 b red">'+astroData.significance_of_the_day.value+'</span>'+
				'<div class="shim1px">&nbsp;</div>'+
				astroData.significance_of_the_day.description +
                '</div>';
	return new Element('div',{'class':'',html:tpl}).create();
};

Widget.prototype.preference = function()
{
	sInput = {type:"Country",country:"",state:"",place:"",data:"",curIndex:0,curSCity:''};
	var tpl =   '<div class="resultbox_prf">'+
                '<div class="resultbox_head ac fa pt12 b">Change Location</div>'+
				'<div class="blk">&nbsp;</div>'+
                '<div class="pt11 ml5 src_result" id="src_result">'+
                '<span class="pt12 b blk tal">'+inpSearch.replace("**VL**",sInput.type)+'</span>'+
				'<div class="shim4px">&nbsp;</div>'+
				'Type atleast three '+
				'starting letters of the country you want to Search. <br> Then the result will be loaded "Here"</div>'+
				'<div class="shim1px">&nbsp;</div>'+
                '</div>';
	return new Element('div',{'class':'',html:tpl}).create();
};

Widget.prototype.chart = function()
{
	var tpl =	'<div class="resultbox">'+
			    '     <div class="resultbox_head ac fa pt12 b">Instant Astro Chart</div>'+
				'<div class="shim1px">&nbsp;</div>'+
				'     <img alt="" src="'+this.getCurChart()+'" style="width:142px; height:112px; " onmousemove="viewChart(\''+this.getCurChart()+'\')" onmouseout="hideChart()" />'+
				'	<input type="image" id="floatimage" src="'+this.getCurChart()+'" border="0" class="floatimage" />'+
				'</div>';
	return new Element('div',{'class':'',html:tpl}).create();
};

Widget.prototype.panchanga = function()
{
	var tpl = '<div class="resultbox">'+
              '  <div class="resultbox_head ac fa pt12 b">Today\'s Panchangam</div>'+
              '   <div class="calnstar_star">'+
              '  	<div class="calnstar_sname pl3 fa pt12 b">'+astroData.panchangam.star.caption+' : <span class="pt12 b red">'+astroData.panchangam.star.value+'</span></div>'+
              '      <div class="calnstar_head pt11 ac fa grey">('+astroData.panchangam.star.duration+')</div>'+
              '  </div>'+
              '  <div class="shim1px">&nbsp;</div>'+
              '  <div class="calnstar_star">'+
              '  	<div class="calnstar_sname pl3 fa pt12 b">'+astroData.panchangam.thithi.caption+' : <span class="pt12 b red">'+astroData.panchangam.thithi.value+'</span></div>'+
              '      <div class="calnstar_head pt11 ac fa grey">('+astroData.panchangam.thithi.duration+')</div>'+
              '  </div>'+
              '  <div class="shim1px">&nbsp;</div>'+
              '  <div class="calnstar_sname pl3 fa pt12 b">'+astroData.panchangam.karana.caption+' : <span class="pt12 b red">'+astroData.panchangam.karana.value+'</span></div>'+
              '  <div class="shim1px">&nbsp;</div>'+
              '  <div class="calnstar_sname pl3 fa pt12 b">'+astroData.panchangam.nithyayogam.caption+' : <span class="pt12 b red">'+astroData.panchangam.nithyayogam.value+'</span></div>'+
              '</div';
	return new Element('div',{'class':'',html:tpl}).create();
};

Widget.prototype.lcalendar = function(obCal)
{
	var tpl =	'<div class="resultbox">'+
			    '     <div class="resultbox_head ac fa pt12 b">Calendar</div>'+
				'<div class="shim1px">&nbsp;</div>'+
				'<div align="center" class="pl3">'+obCal+'</div>'+
				'</div>';
	return new Element('div',{'class':'',html:tpl}).create();
};

Widget.prototype.astroday = function()
{
	var tpl = '<div class="resultbox">'+  
              '  <div class="resultbox_head ac fa pt12 b">Astroday</div>'+
              '  	<div class="resultbox_text pl3 fa pt11">'+astroData.panchangam.rahukalam.caption+':</div>'+
              '      <div class="calnstar_head pt11 ac fa "><span class="pt12 b red">'+astroData.panchangam.rahukalam.duration.toLowerCase()+'</span></div>'+
              '  <div class="shim2px">&nbsp;</div>'+
              '  	<div class="resultbox_text pl3 fa pt11">'+astroData.panchangam.yamakantakalam.caption+' : </div>'+
              '      <div class="calnstar_head pt11 ac fa "><span class="pt12 b red">'+astroData.panchangam.yamakantakalam.duration.toLowerCase()+'</span></div>'+
			  '		<div class="shim2px">&nbsp;</div>'+
              '  	<div class="calnstar_sname pl3 fa pt11">'+astroData.panchangam.sunrise.caption+':<span class="pt12 b red">'+astroData.panchangam.sunrise.value+'</span> </div>'+
              '  <div class="shim2px">&nbsp;</div><div class="calnstar_star">'+
              '  	<div class="calnstar_sname pl3 fa pt11">'+astroData.panchangam.sunset.caption+' :<span class="pt12 b red"> '+astroData.panchangam.sunset.value+'</span></div>'+
              '</div>'+
              '</div>';
	return new Element('div',{'class':'',html:tpl}).create();
};

var getoneliners = function()
{	
	try
	{
		
		lsrv = "http://www.clickastro.com/widget/dailyprediction.php?tag=full";
		jObj = new JSONScript(lsrv); 
		jObj.addScriptTag();
	}
	catch(err)
	{
		//alert('3:' + err.description );
		error(err.description);
	}
};

var parseoneliners = function(jsonpred)
{
	var full = jsonpred;
	sunoneliner[1] = jsonpred.Aries;
	sunoneliner[2] = jsonpred.Taurus;
	sunoneliner[3] = jsonpred.Gemini;
	sunoneliner[4] = jsonpred.Cancer;
	sunoneliner[5] = jsonpred.Leo;
	sunoneliner[6] = jsonpred.Virgo;
	sunoneliner[7] = jsonpred.Libra;
	sunoneliner[8] = jsonpred.Scorpio;
	sunoneliner[9] = jsonpred.Sagittarius;
	sunoneliner[10] = jsonpred.Capricorn;
	sunoneliner[11] = jsonpred.Aquarius;
	sunoneliner[12] = jsonpred.Pisces;

	moononeliner[1] = jsonpred.Mesha;
	moononeliner[2] = jsonpred.Vrishaba;
	moononeliner[3] = jsonpred.Mithuna;
	moononeliner[4] = jsonpred.Karkata;
	moononeliner[5] = jsonpred.Simha;
	moononeliner[6] = jsonpred.Kanya;
	moononeliner[7] = jsonpred.Thula;
	moononeliner[8] = jsonpred.Vrischika;
	moononeliner[9] = jsonpred.Dhanu;
	moononeliner[10] = jsonpred.Makara;
	moononeliner[11] = jsonpred.Kumbha;
	moononeliner[12] = jsonpred.Meena;
	
	//alert(jsonpred.Mesha);
};


var prediction = function(predSign)
{	 	
	predictionOptions.signId = predSign;
	predictionOptions.sign = sunsigns[predSign];
	if(predictionOptions.type=='Sun')
	{
		predictionOptions.caption =	 sunsigns[predSign];
	}
	else if(predictionOptions.type=='Moon')
	{
		predictionOptions.caption =	 moonsigns[predSign];
	}

	loadWidget('fullpred',false);
}

var makeactivehead = function(section)
{
	//alert(section);
	if(section=='Sun')
	{
		sunbackground = 'bbgrey';
		moonbackground = '';
		predictionOptions.caption =	 sunsigns[predictionOptions.signId];
	}
	else
	{
		sunbackground = '';
		moonbackground = 'bbgrey';
		predictionOptions.caption =	 moonsigns[predictionOptions.signId];
	}
	predictionOptions.type = section;
	loadWidget(options.initScreen,false);
	//avWidget = avWidget.prepareCalendar(true);

}

var gettitle = function(sign,section)
{	
	if(section=='Sun')
	{
		title = sunsigns[sign];
	}
	else
	{
		title = moonsigns[sign];		
	}
	
	return title;
}

Widget.prototype.FreePredMenu = function()
{
	var tpl =      	'<div class="resultbox cb">' +
		'<div class="  fa pt12 b">' +
				'<div class="linkbox sunsignhead" >' +
                        	'<div class="sunsign b fl plsix  cp ' + sunbackground + '  "  onclick="makeactivehead(sun)">Sun sign</div>' + 
                        	'<div class="moonsign b fr  plsix blue cp  ' + moonbackground + '"  onclick="makeactivehead(moon)">Moon sign</div>' +
                       '</div>' +
				'</div>' + 
                    	'<div class="p5">' + 
                        	'<div class="cb shim4px"></div>' + 
                        	'<img alt="" src="'+srv_root+'images/Aries_'+ predictionOptions.type+ '.gif" class="fl cp" onclick="prediction(1)" title=' +  gettitle(1,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Taurus_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(2)" title=' +  gettitle(2,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Gemini_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(3)" title=' +  gettitle(3,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Cancer_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(4)" title=' +  gettitle(4,predictionOptions.type) + '>' +
                            '<div class="cb shim15px"></div>' +
                            '<img alt="" src="'+srv_root+'images/Leo_'+ predictionOptions.type+ '.gif" class="fl  cp"  onclick="prediction(5)" title=' +  gettitle(5,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Virgo_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(6)" title=' +  gettitle(6,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Libra_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(7)" title=' +  gettitle(7,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Scorpio_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(8)" title=' +  gettitle(8,predictionOptions.type) + '>' +
                            '<div class="cb shim15px"></div>' +
                            '<img alt="" src="'+srv_root+'images/Sagittarius_'+ predictionOptions.type+ '.gif" class="fl cp"  onclick="prediction(9)" title=' +  gettitle(9,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Capricorn_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(10)" title=' +  gettitle(10,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Aquarius_'+ predictionOptions.type+ '.gif" class="fl pl6 cp"  onclick="prediction(11)" title=' +  gettitle(11,predictionOptions.type) + '>' +
                            '<img alt="" src="'+srv_root+'images/Pisces_'+ predictionOptions.type+ '.gif"" class="fl pl6 cp"  onclick="prediction(12)" title=' +  gettitle(12,predictionOptions.type) + '>' +
                                         
                            '</div></div>' ;
	return new Element('div',{'class':'',html:tpl}).create();
};

var showsignmenu = function()
{
	options.initScreen = 'frpred';
	//avWidget = avWidget.prepareCalendar(true);
	loadWidget(options.initScreen,false);
}
Widget.prototype.FreePredictions = function()
{
	//alert(options.clientid);
	var signprediction = '';
	if(predictionOptions.type=='Sun')
	{
		//alert('sunsign ' + predictionOptions.caption + ' ' + predictionOptions.signId);
		signprediction = sunoneliner[predictionOptions.signId];
	}
	else
	{
		//alert('moonsign ' + predictionOptions.caption + ' ' + predictionOptions.signId);
		signprediction = moononeliner[predictionOptions.signId];
	}
	var tpl =      '<div class="resultbox cb">' +
		'<div class="  fa pt12 b ">' +
			'<div class="linkbox pr4 sunsignhead" >' +
				'<div class="sunsign b fl plsix  cp '+ sunbackground+' red  " onclick="makeactivehead(sun)">Sun sign</div>' +
				'<div class="moonsign b fr pr4 plsix blue cp  '+ moonbackground + ' " onclick="makeactivehead(moon)">Moon sign</div>' +
			'</div>' +
		'</div>' +
		'<div class="p5 ">' +
			'<div class="h91">' +
				'<div class="pt12 b "><img alt="" src="'+srv_root+'images/' + predictionOptions.sign + '_'+ predictionOptions.type+'.gif"  align="absmiddle"> ' + predictionOptions.caption +'</div>' +
				'<div class=" pt11">' + signprediction +'</div>' +
			'</div>' +
			'<div class="pt12 blk">' +
				'<a onclick="showsignmenu()"><div class="fl cp"><img alt="" src="'+srv_root+'images/dbullet_grey_rt.gif"> back</div></a>' +
				'<a href="http://www.clickastro.com/widget/dailyprediction.php?sign=' + predictionOptions.signId + '&name=' +predictionOptions.sign + '&type=' + predictionOptions.type + '&wclient=' + options.clientid +'"  class="blk"  target="_blank"><div class="fr cp">read more <img alt="" src="'+srv_root+'images/dbullet_grey.gif"></div></a>' +
			'</div>' +
		'</div>' +
	'</div>';
	return new Element('div',{'class':'',html:tpl}).create();
	
};

Widget.prototype.shim1px = function()
{
	return new Element('div',{'class':'shim1px cb',html:'&nbsp;'}).create();
};

Widget.prototype.astroCal = function(isChMod)
{
	reg = lpad(astroData.header.regional.day)+' '+astroData.header.regional.month_name+'	'+astroData.header.regional.year_value;
	reg = (isChMod)?strSelRegion():reg;
	var tpl = '<div class="calnstar">'+
              '	<div class="calnstar_2">'+
              '  	<div class="calnstar_head pt11 b cp pl3 fa"><u>'+astroData.header.regional.year_caption+'</u>&nbsp;<img alt="" src="'+srv_root+'images/p_bot.gif" class="cp blk" width="5" height="4"/> </div>'+
              '     <div class="shim2px cb">&nbsp;</div>'+
			  '      <div class="calnstar_text red pt12 b ac fa" id="regional_result">'+reg+'</div>'+
              '  </div>'+
			  '	<div class="calnstar_1">'+
              '  	<div class="resultbox_text pl3 fa pt11 b">'+astroData.panchangam.rahukalam.caption+':</div>'+
              '      <div class="calnstar_head pt11 ac fa "><span class="pt12 b red">'+astroData.panchangam.rahukalam.duration.toLowerCase()+'</span></div>'+
              '  </div>'+
              '  <div class="calnstar_star">'+
              '  	<div class="calnstar_sname pl3 fa pt12 b">'+astroData.panchangam.star.caption+' : <span class="pt12 b red">'+astroData.panchangam.star.value+'</span></div>'+
              '      <div class="calnstar_head pt11 ac fa grey">('+astroData.panchangam.star.duration+')</div>'+
              '  </div>'+
              '</div>'+
			  '</div>';
	return new Element('div',{'class':'',html:tpl}).create();
};

Widget.prototype.linkChart = function()
{
	var tpl = '<div class="linkbox ar red pt12 b pr4 fa">Instant astro chart<img alt="" src="'+srv_root+'images/dbullet_grey.gif" width="10" height="9" class="pl3"/></div>';
	li = new Element('div',{'class':'cp cb',html:tpl}).create();
	//li.onclick = function(){ loadWidget('chart',false);};
	return li;
};

Widget.prototype.linkMain = function()
{
	var tpl = '<div class="linkbox ar blk pt12 b pr4 fa">Main Screen<img alt="" src="'+srv_root+'images/dbullet_grey.gif" width="10" height="9" class="pl3"/></div>';
	li = new Element('div',{'class':'cp cb',html:tpl}).create();
	li.onclick = function(){ loadWidget('basic',false);};
	return li;
};

Widget.prototype.linkDualChart = function(i)
{
	var la = ["","South Indian","East Indian","North Indian"];
	x = 2; y = 3;
	switch(i)
	{
		case 2 : x= 1; break;
		case 3 : x= 1; y=2;break;
	}
	var tpl = '<div class="linkbox ar red pt11 b pr4 fa" ><div class="fl" onclick="loadChart('+x+')">'+la[x]+' </div> <div class="fr" onclick="loadChart('+y+')"> '+la[y]+'</div></div>';
	li = new Element('div',{'class':'cp cb',html:tpl}).create();
	li.onclick = function(){ loadWidget('chart',false);};
	return li;
};

Widget.prototype.linkPanchang = function()
{
	var tpl = '<div class="linkbox ar blk pt12 b pr4 fa">Today\'s Panchagam<img alt="" src="'+srv_root+'images/dbullet_grey.gif" width="10" height="9" class="pl3"/></div>';
	li = new Element('div',{'class':'cp cb',html:tpl}).create();
	//li.onclick = function(){ loadWidget('panch',false);};
	return li;
};

Widget.prototype.linkSpeciality = function()
{
	var tpl = '<div class="linkbox ar blk pt12 b pr4 fa">Speciality of this day<img alt="" src="'+srv_root+'images/dbullet_grey.gif" width="10" height="9" class="pl3"/></div>';
	li = new Element('div',{'class':'cp cb',html:tpl}).create();
	//li.onclick = function(){ loadWidget('signf',false);};
	return li;
};

Widget.prototype.linkAstroDay = function()
{
	var tpl = '<div class="linkbox ar blk pt12 b pr4 fa">Astroday<img alt="" src="'+srv_root+'images/dbullet_grey.gif" width="10" height="9" class="pl3"/></div>';
	li = new Element('div',{'class':'cp cb',html:tpl}).create();
	//li.onclick = function(){ loadWidget('astro',false);};
	return li;
};
Widget.prototype.linkFreePredictions = function()
{
	var tpl = '<div class="linkboxrev ar wht pt12 b pr4 fa">Free Predictions<img alt="" src="'+srv_root+'images/dbullet_white.gif" width="10" height="9" class="pl3"/></div>';
	li = new Element('div',{'class':'cp cb',html:tpl}).create();
	//li.onclick = function(){ loadWidget('frpred',false);};
	return li;
};

/*------------------------------------------------------
			JScript Calendar
--------------------------------------------------------*/
/*  month list array*/
var mlist = ["January","February","March","April","May","June","July","August","September","October","November","December"];
var wlist = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
/*	function to pad 0 to the left of a string	*/
function lpad(str){ str = str.replace(' ',''); if(str.length > 0 && str.length < 2) str = '0'+ str; return str;};

/*
	Creates a calendar array for the given month
	of the date. This array is a 7 x 5 matrix
	and the first colum is sunday then monday
	and so on.
*/
var dtpl = '<div class="sp **CL**" onclick="chDate(**IP**)">**DT**</div>';
function createCalendarFor(sDate)
{
	var dlist = [31,28,31,30,31,30,31,31,30,31,30,31];
	var date = new Date();
	var day = sDate.split('-')[2];
	var month = parseInt(sDate.split('-')[1]) - 1;
	var year = sDate.split('-')[0];
	dlist[1] = isLeapYear(year)? 29 : 28;

	date.setDate(1); date.setMonth(month); date.setFullYear(year);

	var wday = date.getDay();
	var cal = [	[0,0,0,0,0,0,0],
				[0,0,0,0,0,0,0],
				[0,0,0,0,0,0,0],
				[0,0,0,0,0,0,0],
				[0,0,0,0,0,0,0]];

	dt = 1;
	for(var x=0 ; x<5 ; x++)
	{
		for(var i=wday;i< 7;i++) 
		{
			cal[x][i] = dt;
			dt++;
			if(dt > dlist[month]){ x=6; break;}
		}
		wday = 0;
	}
	return cal;
}
function isLeapYear(datea)
{
	datea = parseInt(datea);
	return ((datea%4 == 0) ? ((datea%100 != 0) ? true :((datea%400 == 0)?true:false)) : false);
}

/*---------------------------------------------------------
		Errors
-----------------------------------------------------------*/
function error(msg)
{
	//alert(msg);
	$(targetElementId).clear();
	var tpl ='<div id="av_widget_148" class="ac" style="border:#000 solid 2px; height:308px;">'+
			'<div class="warning"><b>(!)Warning</b></div>'+
			'<div class=" ac" style="height:106px;"><div class="pt12"><br />'+
			'The server is temporarily unavailable due to <strong class="b pt14">maintenance</strong>. <br />'+
			'Please   try again later. </div>'+
			'</div>'+
			'<div class="calnstar_2 ac pt12 b pl3"  >'+
			'Please   try again later. '+
			'</div>'+
			'<div class="shim1px blk"></div>'+
			'<p class="pt14 red b">Thank you for <br />'+
			'your patience</p><div class="pt10">'+''+'</div>'+
			'</div>';
	frame = new Element('div',{id:'av_widget_148','class':'',html:tpl}).create();
	$(targetElementId).instance.appendChild(frame);
}
/*		Util		*/
function getInternetExplorerVersion()
{
  var rv = -1; /* Return value assumes failure.*/
  if (navigator.appName == 'Microsoft Internet Explorer')
  {
    var ua = navigator.userAgent;
    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null)
      rv = parseFloat( RegExp.$1 );
  }
  return rv;
}
/* Detect if the browser is IE or not.
 If it is not IE, we assume that the browser is NS. */
var IE = document.all ? true : false;
/*/ If NS -- that is, !IE -- then set up for mouse capture*/
if (!IE) document.captureEvents(Event.MOUSEMOVE);

/*/ Set-up to use getMouseXY function onMouseMove*/
document.onmousemove = getMouseXY;

/*/ Temporary variables to hold mouse x-y pos.s*/
var tempX = 0;
var tempY = 0;
var pMouse = null;

/*/ Main function to retrieve mouse x-y pos.s */

function getMouseXY(e) 
{
  if (IE) 
  { /*/ grab the x-y pos.s if browser is IE*/
    tempX = event.clientX + document.body.scrollLeft;
    tempY = event.clientY + document.body.scrollTop;
  } 
  else 
  {  /*/ grab the x-y pos.s if browser is NS*/
    tempX = e.pageX;
    tempY = e.pageY;
  }  
  /*/ catch possible negative values in NS4*/
  if (tempX < 0){tempX = 0}
  if (tempY < 0){tempY = 0}  
  /*/ show the position values in the form named Show*/
  /*/ in the text fields named MouseX and MouseY*/
  pMouse = {x:tempX,y:tempY};
}
function inArray(el,arr)
{
	return false;
}
function Trimm(str,ln)
{
	return (str.length > ln) ? str.substring(0,(ln-3))+'...' : str;
}
