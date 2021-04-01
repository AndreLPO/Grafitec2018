formData = new FormData();

document.getElementById("enviarcar").onclick = function (){
	var nomeprod = document.getElementById("nomecar");
	var qtdprod = document.getElementById("quantidade");
	var precoprod = document.getElementById("precocar");
	var subprod = document.getElementById("subcar");
	if (nomeprod.value!=""&&qtdprod.value!=0&&precoprod.value!=0&&subprod.value!=0) {
	//if (qtdprod.value!="") {
		formData.append("np", nomeprod.value);
		formData.append("qp", qtdprod.value);
		formData.append("pp", precoprod.value);
		formData.append("sp", subprod.value);
		var xml = new XMLHttpRequest();
		xml.onreadystatechange=function(){
			if (xml.readyState===4&&xml.status===200) {
				alert(xml.responseText);
			};
		};
		xml.open("POST","enviadds.php",true);
		xml.send(formData);
	}else{
		alert("informe os dados");
	}

	};