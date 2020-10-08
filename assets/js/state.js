function populate(s1, s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	
	if(s1.value == "abia"){
		var optionArray = ["|Any Region","aba north|Aba North","aba south|Aba South","arochukwu|Arochukwu","bende|Bende","Ikwuano|Ikwuano","Isiala-Ngwa North|Isiala-Ngwa North","Isiala-Ngwa South|Isiala-Ngwa South","Isuikwato|Isuikwato","Obi Nwa|Obi Nwa","Ohafia|Ohafia","Osisioma|Osisioma","Ngwa|Ngwa","Ugwunagbo|Ugwunagbo","Ukwa East|Ukwa East","Ukwa West|Ukwa West","Umuahia North|Umuahia North","Umuahia South|Umuahia South","Umu-Neochi|Umu-Neochi"];
	}
	if(s1.value == "adamawa"){
		var optionArray = ["|Any Region","Demsa|Demsa","Fufore|Fufore","Ganaye|Ganaye","Gireri|Gireri","Gombi|Gombi","Guyuk|Guyuk","Hong|Hong","Jada|Jada","Lamurde|Lamurde","Madagali|Madagali","Maiha|Maiha","Mayo-Belwa|Mayo-Belwa","Michika|Michika","Mubi North|Mubi North","Mubi South|Mubi South","Numan|Numan","Shelleng|Shelleng","Song|Song","Toungo|Toungo","Yola North|Yola North","Yola South|Yola South"];
	}
	if(s1.value == "akwa ibom"){
		var optionArray = ["|Any Region","Abak|Abak","Obolo|Obolo","Eket|Eket","Esit Eket|Esit Eket","Essien Udim|Essien Udim","Etim Ekpo|Etim Ekpo","Etinan|Etinan","Ibeno|Ibeno","Ibesikpo Asutan|Ibesikpo Asutan","Ibiono Ibom|Ibiono Ibom","Ika|Ika","Ikono|Ikono","Ikot Abasi|Ikot Abasi","Ikot Ekpene|Ikot Ekpene","Ini|Ini","Itu|Itu","Mbo|Mbo","Mkpat Enin|Mkpat Enin","Nsit Atai|Nsit Atai","Nsit Ibom|Nsit Ibom","Nsit Ubium|Nsit Ubium","Obot Akara|Obot Akara","Okobo|Okobo","Onna|Onna","Oron|Oron","Oruk Anam|Oruk Anam","Udung Uko|Udung Uko","Ukanafun|Ukanafun","Uruan|Uruan","Urue-Offong|Urue-Offong/Oruko","Uyo|Uyo"];
	}
	if(s1.value == "anambra"){
		var optionArray = ["|Any Region","Aguata|Aguata","Anambra East|Anambra East","Anambra West|Anambra West","Anaocha|Anaocha","Awka North|Awka North","Awka South|Awka South","Ayamelum|Ayamelum","Dunukofia|Dunukofia","Ekwusigo|Ekwusigo","Idemili North|Idemili North","Idemili south|Idemili south","Ihiala|Ihiala","Njikoka|Njikoka","Nnewi North|Nnewi North","Nnewi South|Nnewi South","Ogbaru|Ogbaru","Onitsha North|Onitsha North","Onitsha South|Onitsha South","Orumba North|Orumba North","Orumba South|Orumba South","Oyi|Oyi"];
	}
	if(s1.value == "bauchi"){
		var optionArray = ["|Any Region","Alkaleri|Alkaleri","Bauchi|Bauchi","Bogoro|Bogoro","Damban|Damban","Darazo|Darazo","Dass|Dass","Ganjuwa|Ganjuwa","Giade|Giade","Itas/Gadau| Itas/Gadau","Jama'are|Jama'are","Katagum|Katagum","Ngwa|Ngwa","Kirfi|Kirfi","Misau|Misau","Ningi|Ningi","Shira|Shira","Tafawa-Balewa|Tafawa-Balewa","Toro|Toro","Warji|Warji","Zaki|Zaki"];
	}
	if(s1.value == "bayelsa"){
		var optionArray = ["|Any Region","Brass|Brass","Ekeremor|Ekeremor","Kolokuma/Opokuma|Kolokuma/Opokuma","Nembe|Nembe","Ogbia|Ogbia","Sagbama|Sagbama","Southern Ijaw|Southern Ijaw","Yenegoa |Yenegoa","Membe|Membe"];
	}
	if(s1.value == "benue"){
		var optionArray = ["|Any Region","Ado|Ado","Agatu|Agatu","Apa|Apa","Buruku|Buruku","Gboko|Gboko","Guma|Guma","Gwer East|Gwer East","Gwer West|Gwer West","Katsina-Ala|Katsina-Ala","Konshisha|Konshisha","Kwande|Kwande","Logo|Logo","Ugwunagbo|Ugwunagbo","Makurdi|Makurdi","Obi|Obi","Ogbadibo|Ogbadibo","Oju|Oju","Okpokwu|Okpokwu","Oturkpo|Oturkpo","Ohimini|Ohimini","Tarka|Tarka","Ukum|Ukum","Ushongo|Ushongo","Vandeikya|Vandeikya"];
	}
	if(s1.value == "borno"){
		var optionArray = ["|Any Region","Abadam|Abadam","Askira/Uba|Askira/Uba","Bama|Bama","Bayo|Bayo","Biu|Biu","Chibok|Chibok","Damboa|Damboa","Dikwa|Dikwa","Gubio|Gubio","Guzamala|Guzamala","Gwoza|Gwoza","Hawul|Hawul","Jere|Jere","Kaga|Kaga","Kala/Balge|Kala/Balge","Konduga|Konduga","Kukawa|Kukawa","Kwaya Kusar|Kwaya Kusar","Mafa|Mafa","Magumeri|Magumeri","Maiduguri|Maiduguri","Marte|Marte","Mobbar|Mobbar","Monguno|Monguno","Ngala|Ngala","Nganzai|Nganzai","Shani|Shani"];
	}
	if(s1.value == "cross rivers"){
		var optionArray = ["|Any Region","Akpabuyo|Akpabuyo","Odukpani|Odukpani","Akamkpa|Akamkpa","Biase|Biase","Abi|Abi","Ikom|Ikom","Yarkur|Yarkur","Odubra|Odubra","Boki|Boki","Ogoja|Ogoja","Yala|Yala","Obudu|Obudu","Calabar South|Calabar South","Etung|Etung","Bekwara|Bekwara","Bakassi|Bakassi","Calabar|Calabar"];
	}
	if(s1.value == "delta"){
		var optionArray = ["|Any Region","Oshimili|Oshimili","Aniocha|Aniocha","Ika South|Ika South","Aniocha South|Aniocha South","Ika North-East|Ika North-East","Ndokwa West|Ndokwa West","Ndokwa East|Ndokwa East","Isoko south|Isoko south","Isoko North|Isoko North","Bomadi|Bomadi","Burutu|Burutu","Ughelli South|Ughelli South","Ughelli North|Ughelli North","Ethiope West|Ethiope West","Ethiope East|Ethiope East","Sapele|Sapele","Okpe|Okpe","Warri North|Warri North","Warri South|Warri South","Uvwie|Uvwie","Udu|Udu","Warri Central|Warri Central","Ukwani|Ukwani","Oshimili North|Oshimili North","Patani|Patani"];
	}
	if(s1.value == "ebonyi"){
		var optionArray = ["|Any Region","Afikpo South|Afikpo South","Afikpo North|Afikpo North","Onicha|Onicha","Ohaozara|Ohaozara","Abakaliki|Abakaliki","Ishielu|Ishielu","lkwo|lkwo","Ezza|Ezza","Ezza South|Ezza South","Ohaukwu|Ohaukwu","Ebonyi|Ebonyi","Ivo|Ivo"];
	}
	if(s1.value == "enugu"){
		var optionArray = ["|Any Region","Enugu South|Enugu South","Igbo-Eze South|Igbo-Eze South","Enugu North|Enugu North","Nkanu|Nkanu","Udi Agwu|Udi Agwu","Oji-River|Oji-River","Ezeagu|Ezeagu","IgboEze North|IgboEze North","Isi-Uzo|Isi-Uzo","Nsukka|Nsukka","Igbo-Ekiti|Igbo-Ekiti","Uzo-Uwani|Uzo-Uwani","Enugu East|Enugu East","Aninri|Aninri","Nkanu East|Nkanu East","Udenu|Udenu"];
	}
	if(s1.value == "edo"){
		var optionArray = ["|Any Region","Esan North-East|Esan North-East","Esan Central|Esan Central","Esan West|Esan West","Egor|Egor","Ukpoba|Ukpoba","Central|Central","Etsako Central|Etsako Central","Igueben|Igueben","Oredo|Oredo","Ovia South-West|Ovia South-West","Ovia South-East|Ovia South-East","Orhionwon|Orhionwon","Uhunmwonde|Uhunmwonde","Etsako East|Etsako East","Esan South-East|Esan South-East"];
	}
	if(s1.value == "ekiti"){
		var optionArray = ["|Any Region","Ado|Ado","Ekiti-East|Ekiti-East","Ekiti-West|Ekiti-West","Emure/Ise/Orun|Emure/Ise/Orun","Ekiti South-West|Ekiti South-West","Ikare|Ikare","Irepodun|Irepodun","Ijero|Ijero","Ido/Osi|Ido/Osi","Oye|Oye","Ikole|Ikole","Moba|Moba","Gbonyin|Gbonyin","Efon|Efon","Ise/Orun|Ise/Orun","Ilejemeje|Ilejemeje"];
	}
	if(s1.value == "gombe"){
		var optionArray = ["|Any Region","Akko|Akko","Balanga|Balanga","Billiri|Billiri","Dukku|Dukku","Kaltungo|Kaltungo","Kwami|Kwami","Shomgom|Shomgom","Funakaye|Funakaye","Gombe|Gombe","Nafada/Bajoga|Nafada/Bajoga","Yamaltu/Delta|Yamaltu/Delta"];
	}
	if(s1.value == "imo"){
		var optionArray = ["|Any Region","Aboh-Mbaise|Aboh-Mbaise","Ahiazu-Mbaise|Ahiazu-Mbaise","Ehime-Mbano|Ehime-Mbano","Ezinihitte|Ezinihitte","Ikwuano|Ikwuano","Ideato North|Ideato North","Ideato South|Ideato South","Isuikwato|Isuikwato","Ihitte/Uboma|Ihitte/Uboma","Ikeduru|Ikeduru","Isiala Mbano|Isiala Mbano","Isu|Isu","Mbaitoli|Mbaitoli","Ngor-Okpala|Ngor-Okpala","Njaba|Njaba","Nwangele|Nwangele","Nkwerre|Nkwerre","Obowo|Obowo","Oguta|Oguta","Ohaji/Egbema|Ohaji/Egbema","Okigwe|Okigwe","Orlu|Orlu","Orsu|Orsu","Oru East|Oru East","Oru West|Oru West","Owerri|Owerri","Owerri North|Owerri North","Owerri West|Owerri West"];
	}
	if(s1.value == "jigawa"){
		var optionArray = ["|Any Region","Auyo|Auyo","Babura|Babura","Birni Kudu|Birni Kudu","Biriniwa|Biriniwa","Buji|Buji","Dutse|Dutse","Gagarawa|Gagarawa","Garki|Garki","Gumel|Gumel","Guri|Guri","Gwaram|Gwaram","Gwiwa|Gwiwa","Hadejia|Hadejia","Jahun|Jahun","Kafin Hausa|Kafin Hausa","Kaugama Kazaure|Kaugama Kazaure","Kiri Kasamma|Kiri Kasamma","Kiyawa|Kiyawa","Maigatari|Maigatari","Malam Madori|Malam Madori","Miga|Miga","Ringim|Ringim","Roni|Roni","Sule-Tankarkar|Sule-Tankarkar","Taura|Taura","Yankwashi|Yankwashi"];
	}
	if(s1.value == "kaduna"){
		var optionArray = ["|Any Region","Birni-Gwari|Birni-Gwari","Chikun|Chikun","Giwa|Giwa","Igabi|Igabi","Ikara|Ikara","jaba|Jaba","Jema'a|Jema'a","Kachia|Kachia","Kaduna North|Kaduna North","Kaduna South|Kaduna South","Kagarko|Kagarko","Kajuru|Kajuru","Kaura|Kaura","Kauru|Kauru","Kubau|Kubau","Kudan|Kudan","Lere|Lere","Makarfi|Makarfi","Sabon-Gari|Sabon-Gari","Sanga|Sanga","Soba|Soba","Zango-Kataf|Zango-Kataf","Zaria|Zaria"];
	}
	if(s1.value == "kano"){
		var optionArray = ["|Any Region","Ajingi|Ajingi","Albasu|Albasu","Bagwai|Bagwai","Bebeji|Bebeji","Bichi|Bichi","Bunkure|Bunkure","Dala|Dala","Dambatta|Dambatta","Dawakin Kudu|Dawakin Kudu","Dawakin Tofa|Dawakin Tofa","Doguwa|Doguwa","Fagge|Fagge","Gabasawa|Gabasawa","Garko|Garko","Garum|Garum","Mallam|Mallam","Gaya|Gaya","Gezawa|Gezawa","Gwale|Gwale","Gwarzo|Gwarzo","Kabo|Kabo","Kano|Kano","Karaye|Karaye","Kibiya|Kibiya","Kiru|Kiru","kumbotso|kumbotso","Kunchi|Kunchi","Kura|Kura","Madobi|Madobi","Makoda|Makoda","Minjibir|Minjibir","Nasarawa|Nasarawa","Rano|Rano","Rimin Gado|Rimin Gado","Rogo|Rogo","Shanono|Shanono","Sumaila|Sumaila","Takali|Takali","Tarauni|Tarauni","Tofa|Tofa","Tsanyawa|Tsanyawa","Tudun Wada|Tudun Wada","Ungogo|Ungogo","Warawa|Warawa","Wudil|Wudil"];
	}
	if(s1.value == "katsina"){
		var optionArray = ["|Any Region","Bakori|Bakori","Batagarawa|Batagarawa","Batsari|Batsari","Baure|Baure","Bindawa|Bindawa","Charanchi|Charanchi","Dandume|Dandume","Danja|Danja","Dan Musa|Dan Musa","Daura|Daura","Dutsi|Dutsi","Dutsin-Ma|Dutsin-Ma","Faskari|Faskari","Funtua|Funtua","Ingawa|Ingawa","Jibia|Jibia","Kafur|Kafur","Kaita|Kaita","Kankara|Kankara","Kankia|Kankia","Katsina|Katsina","Kurfi|Kurfi","Kusada|Kusada","Mai'Adua|Mai'Adua","Malumfashi|Malumfashi","Mani|Mani","Mashi|Mashi","Matazuu|Matazuu","Musawa|Musawa","Rimi|Rimi","Sabuwa|Sabuwa","Safana|Safana","Sandamu|Sandamu","Zango|Zango"];
	}
	if(s1.value == "kebbi"){
		var optionArray = ["|Any Region","Aleiro|Aleiro","Arewa-Dandi|Arewa-Dandi","Argungu|Argungu","Augie|Augie","Bagudo|Bagudo","Birnin Kebbi|Birnin Kebbi","Bunza|Bunza","Dandi|Dandi","Fakai|Fakai","Gwandu|Gwandu","Jega|Jega","Kalgo|Kalgo","Koko/Besse|Koko/Besse","Maiyama|Maiyama","Ngaski|Ngaski","Sakaba|Sakaba","Shanga|Shanga","Suru|Suru","Wasagu/Danko|Wasagu/Danko","Yauri|Yauri","Zuru|Zuru"];
	}
	if(s1.value == "kogi"){
		var optionArray = ["|Any Region","Adavi|Adavi","Ajaokuta|Ajaokuta","Ankpa|Ankpa","Bassa|Bassa","Dekina|Dekina","Ibaji|Ibaji","Idah|Idah","Igalamela-Odolu|Igalamela-Odolu","Ijumu|Ijumu","Kabba/Bunu|Kabba/Bunu","Kogi|Kogi","Lokoja|Lokoja","Mopa-Muro|Mopa-Muro","Ofu|Ofu","Ogori/Mangongo|Ogori/Mangongo","Okehi|Okehi","Okene|Okene","Olamabolo|Olamabolo","Omala|Omala","Yagba East|Yagba East", "Yagba West|Yagba West"];
	}
	if(s1.value == "kwara"){
		var optionArray = ["|Any Region","Asa|Asa","Baruten|Baruten","Edu|Edu","Ekiti|Ekiti","Ifelodun|Ifelodun","Ilorin East|Ilorin East","Ilorin West|Ilorin West","Irepodun|Irepodun","Isin|Isin","Kaiama|Kaiama","Moro|Moro","Offa|Offa","Oke-Ero|Oke-Ero","Oyun|Oyun","Pategi|Pategi"];
	}
	if(s1.value == "lagos"){
		var optionArray = ["|Any Region","Ajah|Ajah","Agege|Agege","Ajeromi-Ifelodun|Ajeromi-Ifelodun","Alimosho|Alimosho","Amuwo-Odofin|Amuwo-Odofin","Apapa|Apapa","Agboyi/Ketu|Agboyi/Ketu","Badagry|Badagry","Epe|Epe","Eti-Osa|Eti-Osa","Egbe Idimu|Egbe Idimu","Epe|Epe","Gbagada|Gbagada","Ibeju|Ibeju","Ifako-Ijaye|Ifako-Ijaye","Ikeja|Ikeja","Ikorodu|Ikorodu","Ikotun/Igando|Ikotun/Igando","Ikoyi|Ikoyi","Ipaja|Ipaja","Ilupeju|Ilupeju","Isolo|Isolo","Kosofe|Kosofe","Lagos Island|Lagos Island","Lagos Mainland|Lagos Mainland","Lekki Phase 1|Lekki Phase 1","Lekki Phase 2|Lekki Phase 2","Mushin|Mushin","Maryland|Maryland","Magodo|Magodo","Ojo|Ojo","Ojodu|Ojodu","Ojota|Ojota","Oshodi-Isolo|Oshodi-Isolo","Orile|Orile","Shomolu|Shomolu","Surulere|Surulere","Victoria Island|Victoria Island","Yaba|Yaba"];
	}
	if(s1.value == "nasarawa"){
		var optionArray = ["|Any Region","Akwanga|Akwanga","Awe|Awe","Doma|Doma","Karu|Karu","Keana|Keana","Keffi|Keffi","Kokona|Kokona","Lafia|Lafia","Nasarawa|Nasarawa","Nasarawa-Eggon|Nasarawa-Eggon","Obi|Obi","Toto|Toto","Wamba|Wamba"];
	}
	if(s1.value == "niger"){
		var optionArray = ["|Any Region","Agaie|Agaie","Agwara|Agwara","Bida|Bida","Borgu|Borgu","Bosso|Bosso","Chanchaga|Chanchaga","Edati|Edati","Gbako|Gbako","Gurara|Gurara","Katcha|Katcha","Kontagora|Kontagora","Lapai|Lapai","Lavun|Lavun","Magama|Magama","Mariga|Mariga","Mashegu|Mashegu","Mokwa|Mokwa","Muya|Muya","Pailoro|Pailoro","Rafi|Rafi","Rijau|Rijau","Shiroro|Shiroro","Suleja|Suleja","Tafa|Tafa","Wushishi|Wushishi"];
	}
	if(s1.value == "ogun"){
		var optionArray = ["|Any Region","Abeokuta North|Abeokuta North","Abeokuta South|Abeokuta South","Ado-Odo/Ota|Ado-Odo/Ota","Egbado North|Egbado North","Egbado South|Egbado South","Ewekoro|Ewekoro","Ifo|Ifo","Ijebu East|Ijebu East","Ijebu North|Ijebu North","Ijebu North East|Ijebu North East","Ijebu Ode|Ijebu Ode","Ikenne|Ikenne","Imeko-Afon|Imeko-Afon","Ipokia|Ipokia","Obafemi-Owode|Obafemi-Owode","Ogun Waterside|Ogun Waterside","Odeda|Odeda","Odogbolu|Odogbolu","Remo North|Remo North","Shagamu|Shagamu"];
	}
	if(s1.value == "ondo"){
		var optionArray = ["|Any Region","Akoko North East|Akoko North East","Akoko North West|Akoko North West","Akoko South|Akoko South","Akure East|Akure East","Akoko South West|Akoko South West","Akure North|Akure North","Akure South|Akure South","Ese-Odo|Ese-Odo","Idanre|Idanre","Ifedore|Ifedore","Ilaje|Ilaje","Ile-Oluji|Ile-Oluji","Okeigbo|Okeigbo","Irele|Irele","Odigbo|Odigbo","Okitipupa|Okitipupa","Ondo East|Ondo East","Ondo West|Ondo West","Ose|Ose","Owo|Owo"];
	}
	if(s1.value == "osun"){
		var optionArray = ["|Any Region","Aiyedade|Aiyedade","Aiyedire|Aiyedire","Atakumosa East|Atakumosa East","Atakumosa West|Atakumosa West","Boluwaduro|Boluwaduro","Boripe|Boripe","Ede North|Ede North","Ede South|Ede South","Egbedore|Egbedore","Ejigbo|Ejigbo","Ife Central|Ife Central","Ife East|Ife East","Ife North|Ife North","Ife South|Ife South","Ifedayo|Ifedayo","Ifelodun|Ifelodun","Ila|Ila","Ilesha East|Ilesha East","Ilesha West|Ilesha West","Irepodun|Irepodun","Irewole|Irewole","Isokan|Isokan","Iwo|Iwo","Obokun|Obokun","Odo-Otin|Odo-Otin","Ola-Oluwa|Ola-Oluwa","Olorunda|Olorunda","Oriade|Oriade","Orolu|Orolu","Osogbo|Osogbo"];
	}
	if(s1.value == "oyo"){
		var optionArray = ["|Any Region","Afijio|Afijio","Akinyele|Akinyele","Atiba|Atiba","Atigbo|Atigbo","Egbeda|Egbeda","Ibadan Central|Ibadan Central","Ibadan North|Ibadan North","Ibadan North West|Ibadan North West","Ibadan South East|Ibadan South East","Ibadan South West|Ibadan South West","Ibarapa Central|Ibarapa Central","Ibarapa East|Ibarapa East","Ibarapa North|Ibarapa North","Ido|Ido","Irepo|Irepo","Iseyin|Iseyin","Itesiwaju|Itesiwaju","Iwajowa|Iwajowa","Kajola|Kajola","Lagelu|Lagelu","Ogbomosho North|Ogbomosho North","Ogbomosho South|Ogbomosho South","Olorunsogo|Olorunsogo","Oluyole|Oluyole","Ona-Ara|Ona-Ara","Orelope|Orelope","Ori Ire|Ori Ire","Oyo East|Oyo East","Oyo West|Oyo West","Saki East|Saki East","Saki West|Saki West","Surulere|Surulere"];
	}
	if(s1.value == "plateau"){
		var optionArray = ["|Any Region","Barkin Ladi|Barkin Ladi","Bassa|Bassa","Bokkos|Bokkos","Jos East|Jos East","Jos North|Jos North","Jos South|Jos South","Kanam|Kanam","Kanke|Kanke","Langtang North|Langtang North","Langtang South|Langtang South","Mangu|Mangu","Mikang|Mikang","Pankshin|Pankshin","Qua'an Pan|Qua'an Pan","Riyom|Riyom","Shendam|Shendam","Wase|Wase"];
	}
	if(s1.value == "rivers"){
		var optionArray = ["|Any Region","Abua/Odual|Abua/Odual","Ahoada East|Ahoada East","Ahoada West|Ahoada West","Akuku Toru|Akuku Toru","Andoni|Andoni","Asari-Toru|Asari-Toru","Bonny|Bonny","Degema|Degema","Emohua|Emohua","Eleme|Eleme","Etche|Etche","Gokana|Gokana","Ikwerre|Ikwerre","Khana|Khana","Obio/Akpor|Obio/Akpor","Ogba/Egbema/Ndoni|Ogba/Egbema/Ndoni","Ogu/Bolo|Ogu/Bolo","Okrika|Okrika","Omumma|Omumma","Opobo|Opobo","Oyigbo|Oyigbo","Port Harcourt|Port Harcourt","Tai|Tai"];
	}
	if(s1.value == "sokoto"){
		var optionArray = ["|Any Region","Binji|Binji","Bodinga|Bodinga","Dange-shnsi|Dange-shnsi","Gada|Gada","Goronyo|Goronyo","Gudu|Gudu","Gawabawa|Gawabawa","Illela|Illela","Isa|Isa","Kware|Kware","kebbe|kebbe","Rabah|Rabah","Sabon birni|Sabon birni","Shagari|Shagari","Silame|Silame","Sokoto North|Sokoto North","Sokoto South|Sokoto South","Tambuwal|Tambuwal","Tangaza|Tangaza","Tureta|Tureta","Wamako|Wamako","Wurno|Wurno","Yabo|Yabo"];
	}
	if(s1.value == "taraba"){
		var optionArray = ["|Any Region","Ardo-kola|Ardo-kola","Bali|Bali","Donga|Donga","Gashaka|Gashaka","Cassol|Cassol","Ibi|Ibi","Jalingo|Jalingo","Karin-Lamido|Karin-Lamido","Kurmi|Kurmi","Lau|Lau","Sardauna|Sardauna","Takum|Takum","Ussa|Ussa","Wukari|Wukari","Yorro|Yorro","Zing|Zing"];
	}
	if(s1.value == "yobe"){
		var optionArray = ["|Any Region","Bade|Bade","Bursari|Bursari","Damaturu|Damaturu","Fika|Fika","Fune|Fune","Geidam|Geidam","Gujba|Gujba","Gulani|Gulani","Jakusko|Jakusko","Karasuwa|Karasuwa","Karawa|Karawa","Machina|Machina","Nangere|Nangere","Nguru Potiskum|Nguru Potiskum","Tarmua|Tarmua","Yunusari|Yunusari","Yusufari|Yusufari"];
	}
	if(s1.value == "zamfara"){
		var optionArray = ["|Any Region","Anka|Anka","Bakura|Bakura","Birnin Magaji|Birnin Magaji","Bukkuyum|Bukkuyum","Bungudu|Bungudu","Gummi|Gummi","Gusau|Gusau","Kaura|Kaura","Namoda|Namoda","Maradun|Maradun","Maru|Maru","Shinkafi|Shinkafi","Talata Mafara|Talata Mafara","Tsafe|Tsafe","Zurmi|Zurmi"];
	}
	if(s1.value == "abuja"){
		var optionArray = ["|Any Region","Abaji|Abaji","Asokoro|Asokoro","Central Business District|Central Business District","Dakidiya|Dakidiya","Dakwo|Dakwo","Dei-Dei|Dei-Dei","Duboyi|Duboyi","Dutse|Dutse","Gaduwa|Gaduwa","Galadimawa|Galadimawa","Garki I|Garki I","Garki II|Garki II","Gudu|Gudu","Guzape|Guzape","Gwagwalada|Gwagwalada","Jabi|Jabi","Jahi|Jahi","Jukwoyi|Jukwoyi","Kabusa|Kabusa","Kado|Kado","Karmo|Karmo","Karu|Karu","Katampe|Katampe","Kaura|Kaura","Kubwa|Kubwa","Kuchigworo|Kuchigworo","Kuje|Kuje","Gwarinpa|Gwarinpa","Lokogoma|Lokogoma","Lugbe|Lugbe","Mabuchi|Mabuchi","Maitama|Maitama","Mpape|Mpape","Nbora|Nbora","Nyanya|Nyanya","Pyakassa|Pyakassa","Utako|Utako","Wumba|Wumba","Wuse II|Wuse II","Wuse|Wuse","Wuye|Wuye","Bwari|Bwari","Kwali|Kwali"];
	}
	
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}