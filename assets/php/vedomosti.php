<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Overenie vedomostí</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../img/fav/favicion.png">
	<link href="https://fonts.googleapis.com/css?family=Hind+Madurai|Rokkitt:700" rel="stylesheet">
	<link href="../style/style.css" rel="stylesheet" >
	<script src="../script/jquery.ui.touch-punch.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	
	<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="https://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	    $( function() {
	    $("#accordion").accordion({ header: "h3", collapsible: true, active: false });
	    $( "#accordion" ).accordion();
	            } );
	</script>
</head>

<body>
	<a href="../html/index1.html" class='domov'><img src="../img/fav/favicion.png" alt="Domov" height="60" width="60"></a>
	<h1>Vyber si tému, z ktorej si chceš overiť svoje vedomosti</h1>
	<div id="accordion">
		<!--TEST1 -->
		<h3>Základné nastavenie routra</h3>
		<article>
			<?php if(@$_COOKIE["test1"]=="1") echo "Tento test si už robil/a.";
			 ?>
			<div id="vyhodnotit">
			<p>Zoraď do správneho poradia úvodnú konfiguráciu routra</p>
				<ul id="sortable"></ul>
				<button >Vyhodnotit</button>
			</div>
		</article>
		<!-- TEST2 -->
		<h3>Vedomosti o základných súčastiach siete</h3>
			<article id="jstf">
			<?php if(@$_COOKIE["test2"]=="1") echo "Tento test si už robil/a."; ?>
			<h2 id="test_status"></h2>
			<div id="test"></div>
			</article>
		<!-- TEST3 -->
		<h3>Router otázočky</h3>
		<article id="jstf">
			<?php if(@$_COOKIE["test3"]=="1") echo "Tento test si už robil/a."; ?>
			<h2 id="status"></h2>
			<div id="testik"></div>	
		</article>
		<!-- TEST4 -->
		<h3>ISO OSI model</h3>
		<article class="iso">
		<div class="protokol">
		    <div class="box2" ondrop="drop001(event)">
		        <text ondragstart="dragStart001(event)" draggable="true" id="target001">HTTP SMTP POP3 FTP Telnet</text>
		    </div>

		    <div class="box2" ondrop="drop002(event)">
		        <text ondragstart="dragStart002(event)" draggable="true" id="target002">TCP UDP</text>
		    </div>

		    <div class="box2" ondrop="drop003(event)">
		        <text ondragstart="dragStart003(event)" draggable="true" id="target003">Ethernet Frame Relay PPP FDDI</text>
		    </div>
		    <div class="box2" ondrop="drop004(event)">
		        <text ondragstart="dragStart004(event)" draggable="true" id="target004">IPv4 IPv6</text>
		    </div>
    	</div>
   		<div class="vrstva">
		    <div class="box1" ondrop="drop006(event)" ondragover="allowDrop001(event)" id="place001">Aplikačná vrstva
																									Prezentačná vrstva
																									Relačná vrstva</div>
		    <div class="box1" ondrop="drop007(event)" ondragover="allowDrop002(event)" id="place002">Transportná vrstva</div>

		    <div class="box1" ondrop="drop008(event)" ondragover="allowDrop003(event)" id="place003">Sieťová vrstva</div>

		    <div class="box1" ondrop="drop009(event)" ondragover="allowDrop004(event)" id="place004">Data-linková(Spojová)
																									Fyzická vrstva</div>	
		</div>
			</div>
		</article>
	</div>
	<!-- TEST1-->
	<script type="text/javascript">
	var questionData={
	    "question":"Ulož do správneho poradia príkazy,aby si nastavil meno routra",
	    "answers":{
	      "1":"Router>enable",
	      "2":"Router#configure terminal",
	      "3":"Router(config)#hostname NAME",
	      "4":"NAME(config)#"
	     }
	    } 
  	$( "#questionText" ).text(questionData.question)
  	for (const order in questionData.answers ) {
    const question= questionData.answers[order];
    $( "#sortable" ).append('<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>'+question+'</li>')
    console.log(question)
 	 };
  	$( "#sortable" )
 	</script>
	<!-- VYHODNOT TEST1-->
	<script>
	  $( function() {
	    $( "#sortable" ).sortable();
	    $( "#sortable" ).disableSelection();
	  } );
	  const min= "1"
	  const max= "4"
	  var dobre = "1234";
	  var vystup = "";
	  $("#vyhodnotit").click(function(){
	    for(var i=1;i<= 4;i++)
	      vystup+=$("li:nth-of-type("+i+")").data("poradie");
	    if(vystup==dobre){
	    	
	    	vyhodnotit.innerHTML = "<h2>Tvoja odpoveď je správna</h2>";
	    	vyhodnotit.innerHTML += "<button onclick='reset()' class='button5'>Skúsiť znova</button>";
	    	}
	    else{
			vyhodnotit.innerHTML = "<h2>Tvoja odpoveď je nesprávna</h2>";
			vyhodnotit.innerHTML += "<button onclick='reset()' class='button5'>Skúsiť znova</button>";
			}
		document.cookie="test1=1";
	  });
	  function reset(){
	  $( "#questionText" ).text(questionData.question)
  		for (const order in questionData.answers ) {
    	const question= questionData.answers[order];
    	$( "#sortable" ).append('<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>'+question+'</li>')
    	console.log(question)
		document.cookie="test2=0";
		};
	  };
	  //RANDOM TEST1
	  function getRndInteger(min, max) {
	    return Math.floor(Math.random() * (max - min) ) + min;
	}
	  $("li:nth-of-type(1)").data("poradie",1);
	  $("li:nth-of-type(2)").data("poradie",2);
	  $("li:nth-of-type(3)").data("poradie",3);
	  $("li:nth-of-type(4)").data("poradie",4);
	</script>
	<!-- TEST2 -->
	<script>
		var pos = 0, test, test_status, question, choices, chA, chB, chC, correct = 0;
		var questions = [
		[   "Ktoré zariadenie prepína na základe Mac Adries?", "Switch", "Hub", "Router", "A" ],
		[   "Ktoré zariadenie prepína na základe IP Adries?", "Switch", "Hub", "Router", "C" ],
		[   "Ktoré zariadenie skopíruje prijaté dáta na všetky ostatné porty?", "Switch", "Hub", "Router", "B" ],
		[   "Ktorá sieť je využívaná lokálne?", "LAN", "MAN", "WAN", "A" ],
		[	"Na čo slúži MAC adresa?", "Mac adresa jednodznačne identifikuje sieťové rozhranie", "Pomocou Mac adresy router odosiela packety", "Je to 42-bitové číslo ktoré jednoznačne identifikuje sieťové rozhranie", "A" ]
		];
	function _(x) {
			return document.getElementById(x);
		}
	//RENDER TEST2
	function renderQuestion() {
		test = _("test");
		if(pos >= questions.length){
			test.innerHTML = "<h2>Máš "+correct+" zo "+questions.length+" otázok správne</h2>";
			_("test_status").innerHTML = "Test je dokončený";
			test.innerHTML += "<button onclick='renderQuestion()' class='button5'>Skúsiť znova</button>";
			document.cookie="test2=0";
			pos = 0;
			correct = 0;
			return false;
		}
		_("test_status").innerHTML = "Otázka "+(pos+1)+" z "+questions.length;
		var question = questions[pos][0];
		chA = questions[pos][1];
		chB = questions[pos][2];
		chC = questions[pos][3];
		test.innerHTML = "<p>"+question+"</p>";
		test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
		test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
		test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>";
		test.innerHTML += "<button onclick='checkAnswer()' class='button5'>Ďalej</button>";
	}
	
	function checkAnswer() {
		choices = document.getElementsByName("choices");
		for(var i=0; i<choices.length; i++) {
			if(choices[i].checked){
				choice = choices[i].value;
			}
		}
		console.log("Choice: "+choice);
		console.log("Answer: "+questions[pos][4]);
		if(choice == questions[pos][4]){
			correct++;
		} 
		pos++;
		console.log("Position: "+pos);
		console.log("Correct: "+correct);
		renderQuestion();
		document.cookie="test2=1";
	}
  	window.addEventListener("load", renderQuestion, false);
	</script>
	<!-- TEST3-->
	<script>
		var posi = 0, testik, status, otazka, moznosti, chQ, chW, chE, spravne = 0;
		var otazky = [
		[   "Protokol OSPF je?", "Najpoužívanejší protok typu link-state s podporou pre VLSM", "Najpoužívanejší protok typu link-state, nepodporuje VLSM", "Najpoužívanejší protok typu distance-vector", "Q" ],
		[   "Ktoré databázy si udržiava OSPF protok?", "Adjacenty Database, Link Database, Forwarding Database", "Adjacenty Database, Next-Hop Database, Link-state Database", "Adjacenty Database, Link-state Database, Forwarding Database", "E" ],
		[   "Ktoré tvrdenie je správne?", "Cez neighborhood vzťah sa prenáša smerovacia informácia ", "Je vytvorený iba ak sa obe smerovače zhodnú na povinných parametroch", "Neighborhood sa dá vytvoriť aj s viac ako jedným routerom cez jeden interface", "W" ],
		[   "Urč správnu odpoveť?", "DR je smerovač, ktorý je centrálnym bodom pre výmenu smerovacej informácie, routre si ho určujú automaticky", "DR je smerovač, ktorý je centrálnym bodom pre výmenu smerovacej informácie, určujeme si ho mi pri konfigurácií  ", "DR je router ktorý v prípade výpadku zastúpi BDR ako hlavný router pre výmenu smerovacej informácie", "Q" ],
		[	"Aké ma označenie packet, ktorý si priamo vyžiada kontrétnu položku topológie?", "LSA", "LSU", "LSR", "E"],
		[	"Ktorým príkazom sa dostaneme do konfiguračného módu?", "enable", "configure terminal", "show running-config", "W"],
		[	"Ktorý zápis je správny pre sieť v ktorej má router adresu 192.168.1.2/25", "network 192.168.1.0 255.255.255.128 area 1", "192.168.1.0 0.0.0.255 area 1", "192.168.1.0 0.0.0.127 area 1", "E"],
		[	" Urč správny zápis pre redistribúciu", "redistribute eigrp 1 subnets", "redistribute eigrp 1 metric 1000", "redistribute eigrp 1 originate", "Q"]
		];
	function _(y) {
			return document.getElementById(y);
		}
	//RENDER TEST3
	function renderQuestions() {
		testik = _("testik");
		if(posi >= otazky.length){
			testik.innerHTML = "<h2>Máš "+spravne+" zo "+otazky.length+" otázok správne</h2>";
			_("status").innerHTML = "Test je dokončený";
			testik.innerHTML += "<button onclick='renderQuestions()' class='button5'>Skúsiť znova</button>";
			document.cookie="test3=0";
			posi = 0;
			spravne = 0;
			return false;
		}
		_("status").innerHTML = "Otázka "+(posi+1)+" z "+otazky.length;
		var otazka = otazky[posi][0];
		chQ = otazky[posi][1];
		chW = otazky[posi][2];
		chE = otazky[posi][3];
		testik.innerHTML = "<p>"+otazka+"</p>";
		testik.innerHTML += "<input type='radio' name='moznosti' value='Q'> "+chQ+"<br>";
		testik.innerHTML += "<input type='radio' name='moznosti' value='W'> "+chW+"<br>";
		testik.innerHTML += "<input type='radio' name='moznosti' value='E'> "+chE+"<br><br>";
		testik.innerHTML += "<button onclick='checkAnswers()' class='button5'>Ďalej</button>";
	}
	function checkAnswers() {
		moznosti = document.getElementsByName("moznosti");
		for(var i=0; i<moznosti.length; i++) {
			if(moznosti[i].checked){
				choice = moznosti[i].value;
			}
		}
		console.log("Choice: "+choice);
		console.log("Answer: "+otazky[posi][4]);
		if(choice == otazky[posi][4]){
			spravne++;
		} 
		posi++;
		console.log("Position: "+posi);
		console.log("Correct: "+spravne);
		renderQuestions();
		document.cookie="test3=1";
	}
	window.addEventListener("load", renderQuestions, false);
	</script>
<!--TEST4 Drag&Drop-->
<script>
    var b = 0;
    b++;
	function dragStart001(event) {
	    event.dataTransfer.setData("choice001", event.target.id);
	}

	function dragStart002(event) {
	    event.dataTransfer.setData("choice002", event.target.id);
	}

	function dragStart003(event) {
	    event.dataTransfer.setData("choice003", event.target.id);
	}

	function dragStart004(event) {
	    event.dataTransfer.setData("choice004", event.target.id);
	}

	function allowDrop001(event) {
	    event.preventDefault();
	}

	function allowDrop002(event) {
	    event.preventDefault();
	}

	function allowDrop003(event) {
	    event.preventDefault();
	}

	function allowDrop004(event) {
	    event.preventDefault();
	}


	function drop006(event) {
	    var data = event.dataTransfer.getData("choice001");
	    event.target.appendChild(document.getElementById(data));
	        place001.innerHTML = "HTTP SMTP POP3 FTP Telnet";
	}

	function drop007(event) {
	    var data = event.dataTransfer.getData("choice002");
	    event.target.appendChild(document.getElementById(data));
	        place002.innerHTML = "TCP UDP";
	}

	function drop008(event) {
	    var data = event.dataTransfer.getData("choice003");
	    event.target.appendChild(document.getElementById(data));
	        place003.innerHTML = "Ethernet Frame Relay PPP FDDI";
	}

	function drop009(event) {
	    var data = event.dataTransfer.getData("choice004");
	    event.target.appendChild(document.getElementById(data));
	        place004.innerHTML = "IPv4 IPv6";
	}
	function drop001(event) {
	    event.preventDefault();
	}

	function drop002(event) {
	    event.preventDefault();
	}

	function drop003(event) {
	    event.preventDefault();
	}

	function drop004(event) {
	    event.preventDefault();
	}
</script>
</body>
</html>
