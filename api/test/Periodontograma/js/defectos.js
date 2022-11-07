	function getSangrado(){
		$("#suma").text(Math.round((totalSangrado/(totalDientes*6)*100)));
		
	}
	
	function getPlaca(){
		$("#suma2").text(Math.round((totalPlaca/(totalDientes*6)*100)));
	}

function getDefectos(){

			var datops18a=document.getElementById('ps18-a').value;
			var datops18b=document.getElementById('ps18-b').value;
			var datops18c=document.getElementById('ps18-c').value;
		
			var datops17a=document.getElementById('ps17-a').value;
			var datops17b=document.getElementById('ps17-b').value;
			var datops17c=document.getElementById('ps17-c').value;
			
			var datops16a=document.getElementById('ps16-a').value;
			var datops16b=document.getElementById('ps16-b').value;
			var datops16c=document.getElementById('ps16-c').value;
			
			var datops15a=document.getElementById('ps15-a').value;
			var datops15b=document.getElementById('ps15-b').value;
			var datops15c=document.getElementById('ps15-c').value;
			
			var datops14a=document.getElementById('ps14-a').value;
			var datops14b=document.getElementById('ps14-b').value;
			var datops14c=document.getElementById('ps14-c').value;
			
			var datops13a=document.getElementById('ps13-a').value;
			var datops13b=document.getElementById('ps13-b').value;
			var datops13c=document.getElementById('ps13-c').value;
			
			var datops12a=document.getElementById('ps12-a').value;
			var datops12b=document.getElementById('ps12-b').value;
			var datops12c=document.getElementById('ps12-c').value;
		
			var datops11a=document.getElementById('ps11-a').value;
			var datops11b=document.getElementById('ps11-b').value;
			var datops11c=document.getElementById('ps11-c').value;

			var total18=parseInt(datops18a)+parseInt(datops18b)+parseInt(datops18c)+
						parseInt(datops17a)+parseInt(datops17b)+parseInt(datops17c)+
						parseInt(datops16a)+parseInt(datops16b)+parseInt(datops16c)+
						parseInt(datops15a)+parseInt(datops15b)+parseInt(datops15c)+
						parseInt(datops14a)+parseInt(datops14b)+parseInt(datops14c)+
						parseInt(datops13a)+parseInt(datops13b)+parseInt(datops13c)+
						parseInt(datops12a)+parseInt(datops12b)+parseInt(datops12c)+
						parseInt(datops11a)+parseInt(datops11b)+parseInt(datops11c);
						
			var datops28a=document.getElementById('ps28-a').value;
			var datops28b=document.getElementById('ps28-b').value;
			var datops28c=document.getElementById('ps28-c').value;
		
			var datops27a=document.getElementById('ps27-a').value;
			var datops27b=document.getElementById('ps27-b').value;
			var datops27c=document.getElementById('ps27-c').value;
			
			var datops26a=document.getElementById('ps26-a').value;
			var datops26b=document.getElementById('ps26-b').value;
			var datops26c=document.getElementById('ps26-c').value;
			
			var datops25a=document.getElementById('ps25-a').value;
			var datops25b=document.getElementById('ps25-b').value;
			var datops25c=document.getElementById('ps25-c').value;
			
			var datops24a=document.getElementById('ps24-a').value;
			var datops24b=document.getElementById('ps24-b').value;
			var datops24c=document.getElementById('ps24-c').value;
			
			var datops23a=document.getElementById('ps23-a').value;
			var datops23b=document.getElementById('ps23-b').value;
			var datops23c=document.getElementById('ps23-c').value;
			
			var datops22a=document.getElementById('ps22-a').value;
			var datops22b=document.getElementById('ps22-b').value;
			var datops22c=document.getElementById('ps22-c').value;
		
			var datops21a=document.getElementById('ps21-a').value;
			var datops21b=document.getElementById('ps21-b').value;
			var datops21c=document.getElementById('ps21-c').value;

			var total28=parseInt(datops28a)+parseInt(datops28b)+parseInt(datops28c)+
						parseInt(datops27a)+parseInt(datops27b)+parseInt(datops27c)+
						parseInt(datops26a)+parseInt(datops26b)+parseInt(datops26c)+
						parseInt(datops25a)+parseInt(datops25b)+parseInt(datops25c)+
						parseInt(datops24a)+parseInt(datops24b)+parseInt(datops24c)+
						parseInt(datops23a)+parseInt(datops23b)+parseInt(datops23c)+
						parseInt(datops22a)+parseInt(datops22b)+parseInt(datops22c)+
						parseInt(datops21a)+parseInt(datops21b)+parseInt(datops21c);			
		
		
			var datops38a=document.getElementById('ps38-a').value;
			var datops38b=document.getElementById('ps38-b').value;
			var datops38c=document.getElementById('ps38-c').value;
		
			var datops37a=document.getElementById('ps37-a').value;
			var datops37b=document.getElementById('ps37-b').value;
			var datops37c=document.getElementById('ps37-c').value;
			
			var datops36a=document.getElementById('ps36-a').value;
			var datops36b=document.getElementById('ps36-b').value;
			var datops36c=document.getElementById('ps36-c').value;
			
			var datops35a=document.getElementById('ps35-a').value;
			var datops35b=document.getElementById('ps35-b').value;
			var datops35c=document.getElementById('ps35-c').value;
			
			var datops34a=document.getElementById('ps34-a').value;
			var datops34b=document.getElementById('ps34-b').value;
			var datops34c=document.getElementById('ps34-c').value;
			
			var datops33a=document.getElementById('ps33-a').value;
			var datops33b=document.getElementById('ps33-b').value;
			var datops33c=document.getElementById('ps33-c').value;
			
			var datops32a=document.getElementById('ps32-a').value;
			var datops32b=document.getElementById('ps32-b').value;
			var datops32c=document.getElementById('ps32-c').value;
		
			var datops31a=document.getElementById('ps31-a').value;
			var datops31b=document.getElementById('ps31-b').value;
			var datops31c=document.getElementById('ps31-c').value;

			var total38=parseInt(datops38a)+parseInt(datops38b)+parseInt(datops38c)+
						parseInt(datops37a)+parseInt(datops37b)+parseInt(datops37c)+
						parseInt(datops36a)+parseInt(datops36b)+parseInt(datops36c)+
						parseInt(datops35a)+parseInt(datops35b)+parseInt(datops35c)+
						parseInt(datops34a)+parseInt(datops34b)+parseInt(datops34c)+
						parseInt(datops33a)+parseInt(datops33b)+parseInt(datops33c)+
						parseInt(datops32a)+parseInt(datops32b)+parseInt(datops32c)+
						parseInt(datops31a)+parseInt(datops31b)+parseInt(datops31c);
						
			var datops48a=document.getElementById('ps48-a').value;
			var datops48b=document.getElementById('ps48-b').value;
			var datops48c=document.getElementById('ps48-c').value;
		
			var datops47a=document.getElementById('ps47-a').value;
			var datops47b=document.getElementById('ps47-b').value;
			var datops47c=document.getElementById('ps47-c').value;
			
			var datops46a=document.getElementById('ps46-a').value;
			var datops46b=document.getElementById('ps46-b').value;
			var datops46c=document.getElementById('ps46-c').value;
			
			var datops45a=document.getElementById('ps45-a').value;
			var datops45b=document.getElementById('ps45-b').value;
			var datops45c=document.getElementById('ps45-c').value;
			
			var datops44a=document.getElementById('ps44-a').value;
			var datops44b=document.getElementById('ps44-b').value;
			var datops44c=document.getElementById('ps44-c').value;
			
			var datops43a=document.getElementById('ps43-a').value;
			var datops43b=document.getElementById('ps43-b').value;
			var datops43c=document.getElementById('ps43-c').value;
			
			var datops42a=document.getElementById('ps42-a').value;
			var datops42b=document.getElementById('ps42-b').value;
			var datops42c=document.getElementById('ps42-c').value;
		
			var datops41a=document.getElementById('ps41-a').value;
			var datops41b=document.getElementById('ps41-b').value;
			var datops41c=document.getElementById('ps41-c').value;

			var total48=parseInt(datops48a)+parseInt(datops48b)+parseInt(datops48c)+
						parseInt(datops47a)+parseInt(datops47b)+parseInt(datops47c)+
						parseInt(datops46a)+parseInt(datops46b)+parseInt(datops46c)+
						parseInt(datops45a)+parseInt(datops45b)+parseInt(datops45c)+
						parseInt(datops44a)+parseInt(datops44b)+parseInt(datops44c)+
						parseInt(datops43a)+parseInt(datops43b)+parseInt(datops43c)+
						parseInt(datops42a)+parseInt(datops42b)+parseInt(datops42c)+
						parseInt(datops41a)+parseInt(datops41b)+parseInt(datops41c);

			var datops18ba=document.getElementById('ps18b-a').value;
			var datops18bb=document.getElementById('ps18b-b').value;
			var datops18bc=document.getElementById('ps18b-c').value;
		
			var datops17ba=document.getElementById('ps17b-a').value;
			var datops17bb=document.getElementById('ps17b-b').value;
			var datops17bc=document.getElementById('ps17b-c').value;
			
			var datops16ba=document.getElementById('ps16b-a').value;
			var datops16bb=document.getElementById('ps16b-b').value;
			var datops16bc=document.getElementById('ps16b-c').value;
			
			var datops15ba=document.getElementById('ps15b-a').value;
			var datops15bb=document.getElementById('ps15b-b').value;
			var datops15bc=document.getElementById('ps15b-c').value;
			
			var datops14ba=document.getElementById('ps14b-a').value;
			var datops14bb=document.getElementById('ps14b-b').value;
			var datops14bc=document.getElementById('ps14b-c').value;
			
			var datops13ba=document.getElementById('ps13b-a').value;
			var datops13bb=document.getElementById('ps13b-b').value;
			var datops13bc=document.getElementById('ps13b-c').value;
			
			var datops12ba=document.getElementById('ps12b-a').value;
			var datops12bb=document.getElementById('ps12b-b').value;
			var datops12bc=document.getElementById('ps12b-c').value;
		
			var datops11ba=document.getElementById('ps11b-a').value;
			var datops11bb=document.getElementById('ps11b-b').value;
			var datops11bc=document.getElementById('ps11b-c').value;

			var total18b=parseInt(datops18ba)+parseInt(datops18bb)+parseInt(datops18bc)+
						parseInt(datops17ba)+parseInt(datops17bb)+parseInt(datops17bc)+
						parseInt(datops16ba)+parseInt(datops16bb)+parseInt(datops16bc)+
						parseInt(datops15ba)+parseInt(datops15bb)+parseInt(datops15bc)+
						parseInt(datops14ba)+parseInt(datops14bb)+parseInt(datops14bc)+
						parseInt(datops13ba)+parseInt(datops13bb)+parseInt(datops13bc)+
						parseInt(datops12ba)+parseInt(datops12bb)+parseInt(datops12bc)+
						parseInt(datops11ba)+parseInt(datops11bb)+parseInt(datops11bc);


			var datops28ba=document.getElementById('ps28b-a').value;
			var datops28bb=document.getElementById('ps28b-b').value;
			var datops28bc=document.getElementById('ps28b-c').value;
		
			var datops27ba=document.getElementById('ps27b-a').value;
			var datops27bb=document.getElementById('ps27b-b').value;
			var datops27bc=document.getElementById('ps27b-c').value;
			
			var datops26ba=document.getElementById('ps26b-a').value;
			var datops26bb=document.getElementById('ps26b-b').value;
			var datops26bc=document.getElementById('ps26b-c').value;
			
			var datops25ba=document.getElementById('ps25b-a').value;
			var datops25bb=document.getElementById('ps25b-b').value;
			var datops25bc=document.getElementById('ps25b-c').value;
			
			var datops24ba=document.getElementById('ps24b-a').value;
			var datops24bb=document.getElementById('ps24b-b').value;
			var datops24bc=document.getElementById('ps24b-c').value;
			
			var datops23ba=document.getElementById('ps23b-a').value;
			var datops23bb=document.getElementById('ps23b-b').value;
			var datops23bc=document.getElementById('ps23b-c').value;
			
			var datops22ba=document.getElementById('ps22b-a').value;
			var datops22bb=document.getElementById('ps22b-b').value;
			var datops22bc=document.getElementById('ps22b-c').value;
		
			var datops21ba=document.getElementById('ps21b-a').value;
			var datops21bb=document.getElementById('ps21b-b').value;
			var datops21bc=document.getElementById('ps21b-c').value;

			var total28b=parseInt(datops28ba)+parseInt(datops28bb)+parseInt(datops28bc)+
						parseInt(datops27ba)+parseInt(datops27bb)+parseInt(datops27bc)+
						parseInt(datops26ba)+parseInt(datops26bb)+parseInt(datops26bc)+
						parseInt(datops25ba)+parseInt(datops25bb)+parseInt(datops25bc)+
						parseInt(datops24ba)+parseInt(datops24bb)+parseInt(datops24bc)+
						parseInt(datops23ba)+parseInt(datops23bb)+parseInt(datops23bc)+
						parseInt(datops22ba)+parseInt(datops22bb)+parseInt(datops22bc)+
						parseInt(datops21ba)+parseInt(datops21bb)+parseInt(datops21bc);	

			var datops38ba=document.getElementById('ps38b-a').value;
			var datops38bb=document.getElementById('ps38b-b').value;
			var datops38bc=document.getElementById('ps38b-c').value;
		
			var datops37ba=document.getElementById('ps37b-a').value;
			var datops37bb=document.getElementById('ps37b-b').value;
			var datops37bc=document.getElementById('ps37b-c').value;
			
			var datops36ba=document.getElementById('ps36b-a').value;
			var datops36bb=document.getElementById('ps36b-b').value;
			var datops36bc=document.getElementById('ps36b-c').value;
			
			var datops35ba=document.getElementById('ps35b-a').value;
			var datops35bb=document.getElementById('ps35b-b').value;
			var datops35bc=document.getElementById('ps35b-c').value;
			
			var datops34ba=document.getElementById('ps34b-a').value;
			var datops34bb=document.getElementById('ps34b-b').value;
			var datops34bc=document.getElementById('ps34b-c').value;
			
			var datops33ba=document.getElementById('ps33b-a').value;
			var datops33bb=document.getElementById('ps33b-b').value;
			var datops33bc=document.getElementById('ps33b-c').value;
			
			var datops32ba=document.getElementById('ps32b-a').value;
			var datops32bb=document.getElementById('ps32b-b').value;
			var datops32bc=document.getElementById('ps32b-c').value;
		
			var datops31ba=document.getElementById('ps31b-a').value;
			var datops31bb=document.getElementById('ps31b-b').value;
			var datops31bc=document.getElementById('ps31b-c').value;

			var total38b=parseInt(datops38ba)+parseInt(datops38bb)+parseInt(datops38bc)+
						parseInt(datops37ba)+parseInt(datops37bb)+parseInt(datops37bc)+
						parseInt(datops36ba)+parseInt(datops36bb)+parseInt(datops36bc)+
						parseInt(datops35ba)+parseInt(datops35bb)+parseInt(datops35bc)+
						parseInt(datops34ba)+parseInt(datops34bb)+parseInt(datops34bc)+
						parseInt(datops33ba)+parseInt(datops33bb)+parseInt(datops33bc)+
						parseInt(datops32ba)+parseInt(datops32bb)+parseInt(datops32bc)+
						parseInt(datops31ba)+parseInt(datops31bb)+parseInt(datops31bc);
			
			var datops48ba=document.getElementById('ps48b-a').value;
			var datops48bb=document.getElementById('ps48b-b').value;
			var datops48bc=document.getElementById('ps48b-c').value;
		
			var datops47ba=document.getElementById('ps47b-a').value;
			var datops47bb=document.getElementById('ps47b-b').value;
			var datops47bc=document.getElementById('ps47b-c').value;
			
			var datops46ba=document.getElementById('ps46b-a').value;
			var datops46bb=document.getElementById('ps46b-b').value;
			var datops46bc=document.getElementById('ps46b-c').value;
			
			var datops45ba=document.getElementById('ps45b-a').value;
			var datops45bb=document.getElementById('ps45b-b').value;
			var datops45bc=document.getElementById('ps45b-c').value;
			
			var datops44ba=document.getElementById('ps44b-a').value;
			var datops44bb=document.getElementById('ps44b-b').value;
			var datops44bc=document.getElementById('ps44b-c').value;
			
			var datops43ba=document.getElementById('ps43b-a').value;
			var datops43bb=document.getElementById('ps43b-b').value;
			var datops43bc=document.getElementById('ps43b-c').value;
			
			var datops42ba=document.getElementById('ps42b-a').value;
			var datops42bb=document.getElementById('ps42b-b').value;
			var datops42bc=document.getElementById('ps42b-c').value;
		
			var datops41ba=document.getElementById('ps41b-a').value;
			var datops41bb=document.getElementById('ps41b-b').value;
			var datops41bc=document.getElementById('ps41b-c').value;

			var total48b=parseInt(datops48ba)+parseInt(datops48bb)+parseInt(datops48bc)+
						parseInt(datops47ba)+parseInt(datops47bb)+parseInt(datops47bc)+
						parseInt(datops46ba)+parseInt(datops46bb)+parseInt(datops46bc)+
						parseInt(datops45ba)+parseInt(datops45bb)+parseInt(datops45bc)+
						parseInt(datops44ba)+parseInt(datops44bb)+parseInt(datops44bc)+
						parseInt(datops43ba)+parseInt(datops43bb)+parseInt(datops43bc)+
						parseInt(datops42ba)+parseInt(datops42bb)+parseInt(datops42bc)+
						parseInt(datops41ba)+parseInt(datops41bb)+parseInt(datops41bc);
						
			var totalps=total18+total28+total38+total48+total18b+total28b+total38b+total48b;
			var mediaps=totalps/(totalDientes*3);
			var redondeado = Math.round(mediaps*Math.pow(10,2))/Math.pow(10,2);
			
			$("#suma4").text(redondeado);
			
			
			var datomg18a=document.getElementById('mg18-a').value;
			var datomg18b=document.getElementById('mg18-b').value;
			var datomg18c=document.getElementById('mg18-c').value;
		
			var datomg17a=document.getElementById('mg17-a').value;
			var datomg17b=document.getElementById('mg17-b').value;
			var datomg17c=document.getElementById('mg17-c').value;
			
			var datomg16a=document.getElementById('mg16-a').value;
			var datomg16b=document.getElementById('mg16-b').value;
			var datomg16c=document.getElementById('mg16-c').value;
			
			var datomg15a=document.getElementById('mg15-a').value;
			var datomg15b=document.getElementById('mg15-b').value;
			var datomg15c=document.getElementById('mg15-c').value;
			
			var datomg14a=document.getElementById('mg14-a').value;
			var datomg14b=document.getElementById('mg14-b').value;
			var datomg14c=document.getElementById('mg14-c').value;
			
			var datomg13a=document.getElementById('mg13-a').value;
			var datomg13b=document.getElementById('mg13-b').value;
			var datomg13c=document.getElementById('mg13-c').value;
			
			var datomg12a=document.getElementById('mg12-a').value;
			var datomg12b=document.getElementById('mg12-b').value;
			var datomg12c=document.getElementById('mg12-c').value;
		
			var datomg11a=document.getElementById('mg11-a').value;
			var datomg11b=document.getElementById('mg11-b').value;
			var datomg11c=document.getElementById('mg11-c').value;

			var total18m=parseInt(datomg18a)+parseInt(datomg18b)+parseInt(datomg18c)+
						parseInt(datomg17a)+parseInt(datomg17b)+parseInt(datomg17c)+
						parseInt(datomg16a)+parseInt(datomg16b)+parseInt(datomg16c)+
						parseInt(datomg15a)+parseInt(datomg15b)+parseInt(datomg15c)+
						parseInt(datomg14a)+parseInt(datomg14b)+parseInt(datomg14c)+
						parseInt(datomg13a)+parseInt(datomg13b)+parseInt(datomg13c)+
						parseInt(datomg12a)+parseInt(datomg12b)+parseInt(datomg12c)+
						parseInt(datomg11a)+parseInt(datomg11b)+parseInt(datomg11c);
						
			var datomg28a=document.getElementById('mg28-a').value;
			var datomg28b=document.getElementById('mg28-b').value;
			var datomg28c=document.getElementById('mg28-c').value;
		
			var datomg27a=document.getElementById('mg27-a').value;
			var datomg27b=document.getElementById('mg27-b').value;
			var datomg27c=document.getElementById('mg27-c').value;
			
			var datomg26a=document.getElementById('mg26-a').value;
			var datomg26b=document.getElementById('mg26-b').value;
			var datomg26c=document.getElementById('mg26-c').value;
			
			var datomg25a=document.getElementById('mg25-a').value;
			var datomg25b=document.getElementById('mg25-b').value;
			var datomg25c=document.getElementById('mg25-c').value;
			
			var datomg24a=document.getElementById('mg24-a').value;
			var datomg24b=document.getElementById('mg24-b').value;
			var datomg24c=document.getElementById('mg24-c').value;
			
			var datomg23a=document.getElementById('mg23-a').value;
			var datomg23b=document.getElementById('mg23-b').value;
			var datomg23c=document.getElementById('mg23-c').value;
			
			var datomg22a=document.getElementById('mg22-a').value;
			var datomg22b=document.getElementById('mg22-b').value;
			var datomg22c=document.getElementById('mg22-c').value;
		
			var datomg21a=document.getElementById('mg21-a').value;
			var datomg21b=document.getElementById('mg21-b').value;
			var datomg21c=document.getElementById('mg21-c').value;

			var total28m=parseInt(datomg28a)+parseInt(datomg28b)+parseInt(datomg28c)+
						parseInt(datomg27a)+parseInt(datomg27b)+parseInt(datomg27c)+
						parseInt(datomg26a)+parseInt(datomg26b)+parseInt(datomg26c)+
						parseInt(datomg25a)+parseInt(datomg25b)+parseInt(datomg25c)+
						parseInt(datomg24a)+parseInt(datomg24b)+parseInt(datomg24c)+
						parseInt(datomg23a)+parseInt(datomg23b)+parseInt(datomg23c)+
						parseInt(datomg22a)+parseInt(datomg22b)+parseInt(datomg22c)+
						parseInt(datomg21a)+parseInt(datomg21b)+parseInt(datomg21c);			
		
		
			var datomg38a=document.getElementById('mg38-a').value;
			var datomg38b=document.getElementById('mg38-b').value;
			var datomg38c=document.getElementById('mg38-c').value;
		
			var datomg37a=document.getElementById('mg37-a').value;
			var datomg37b=document.getElementById('mg37-b').value;
			var datomg37c=document.getElementById('mg37-c').value;
			
			var datomg36a=document.getElementById('mg36-a').value;
			var datomg36b=document.getElementById('mg36-b').value;
			var datomg36c=document.getElementById('mg36-c').value;
			
			var datomg35a=document.getElementById('mg35-a').value;
			var datomg35b=document.getElementById('mg35-b').value;
			var datomg35c=document.getElementById('mg35-c').value;
			
			var datomg34a=document.getElementById('mg34-a').value;
			var datomg34b=document.getElementById('mg34-b').value;
			var datomg34c=document.getElementById('mg34-c').value;
			
			var datomg33a=document.getElementById('mg33-a').value;
			var datomg33b=document.getElementById('mg33-b').value;
			var datomg33c=document.getElementById('mg33-c').value;
			
			var datomg32a=document.getElementById('mg32-a').value;
			var datomg32b=document.getElementById('mg32-b').value;
			var datomg32c=document.getElementById('mg32-c').value;
		
			var datomg31a=document.getElementById('mg31-a').value;
			var datomg31b=document.getElementById('mg31-b').value;
			var datomg31c=document.getElementById('mg31-c').value;

			var total38m=parseInt(datomg38a)+parseInt(datomg38b)+parseInt(datomg38c)+
						parseInt(datomg37a)+parseInt(datomg37b)+parseInt(datomg37c)+
						parseInt(datomg36a)+parseInt(datomg36b)+parseInt(datomg36c)+
						parseInt(datomg35a)+parseInt(datomg35b)+parseInt(datomg35c)+
						parseInt(datomg34a)+parseInt(datomg34b)+parseInt(datomg34c)+
						parseInt(datomg33a)+parseInt(datomg33b)+parseInt(datomg33c)+
						parseInt(datomg32a)+parseInt(datomg32b)+parseInt(datomg32c)+
						parseInt(datomg31a)+parseInt(datomg31b)+parseInt(datomg31c);
						
			var datomg48a=document.getElementById('mg48-a').value;
			var datomg48b=document.getElementById('mg48-b').value;
			var datomg48c=document.getElementById('mg48-c').value;
		
			var datomg47a=document.getElementById('mg47-a').value;
			var datomg47b=document.getElementById('mg47-b').value;
			var datomg47c=document.getElementById('mg47-c').value;
			
			var datomg46a=document.getElementById('mg46-a').value;
			var datomg46b=document.getElementById('mg46-b').value;
			var datomg46c=document.getElementById('mg46-c').value;
			
			var datomg45a=document.getElementById('mg45-a').value;
			var datomg45b=document.getElementById('mg45-b').value;
			var datomg45c=document.getElementById('mg45-c').value;
			
			var datomg44a=document.getElementById('mg44-a').value;
			var datomg44b=document.getElementById('mg44-b').value;
			var datomg44c=document.getElementById('mg44-c').value;
			
			var datomg43a=document.getElementById('mg43-a').value;
			var datomg43b=document.getElementById('mg43-b').value;
			var datomg43c=document.getElementById('mg43-c').value;
			
			var datomg42a=document.getElementById('mg42-a').value;
			var datomg42b=document.getElementById('mg42-b').value;
			var datomg42c=document.getElementById('mg42-c').value;
		
			var datomg41a=document.getElementById('mg41-a').value;
			var datomg41b=document.getElementById('mg41-b').value;
			var datomg41c=document.getElementById('mg41-c').value;

			var total48m=parseInt(datomg48a)+parseInt(datomg48b)+parseInt(datomg48c)+
						parseInt(datomg47a)+parseInt(datomg47b)+parseInt(datomg47c)+
						parseInt(datomg46a)+parseInt(datomg46b)+parseInt(datomg46c)+
						parseInt(datomg45a)+parseInt(datomg45b)+parseInt(datomg45c)+
						parseInt(datomg44a)+parseInt(datomg44b)+parseInt(datomg44c)+
						parseInt(datomg43a)+parseInt(datomg43b)+parseInt(datomg43c)+
						parseInt(datomg42a)+parseInt(datomg42b)+parseInt(datomg42c)+
						parseInt(datomg41a)+parseInt(datomg41b)+parseInt(datomg41c);

			var datomg18ba=document.getElementById('mg18b-a').value;
			var datomg18bb=document.getElementById('mg18b-b').value;
			var datomg18bc=document.getElementById('mg18b-c').value;
		
			var datomg17ba=document.getElementById('mg17b-a').value;
			var datomg17bb=document.getElementById('mg17b-b').value;
			var datomg17bc=document.getElementById('mg17b-c').value;
			
			var datomg16ba=document.getElementById('mg16b-a').value;
			var datomg16bb=document.getElementById('mg16b-b').value;
			var datomg16bc=document.getElementById('mg16b-c').value;
			
			var datomg15ba=document.getElementById('mg15b-a').value;
			var datomg15bb=document.getElementById('mg15b-b').value;
			var datomg15bc=document.getElementById('mg15b-c').value;
			
			var datomg14ba=document.getElementById('mg14b-a').value;
			var datomg14bb=document.getElementById('mg14b-b').value;
			var datomg14bc=document.getElementById('mg14b-c').value;
			
			var datomg13ba=document.getElementById('mg13b-a').value;
			var datomg13bb=document.getElementById('mg13b-b').value;
			var datomg13bc=document.getElementById('mg13b-c').value;
			
			var datomg12ba=document.getElementById('mg12b-a').value;
			var datomg12bb=document.getElementById('mg12b-b').value;
			var datomg12bc=document.getElementById('mg12b-c').value;
		
			var datomg11ba=document.getElementById('mg11b-a').value;
			var datomg11bb=document.getElementById('mg11b-b').value;
			var datomg11bc=document.getElementById('mg11b-c').value;

			var total18bm=parseInt(datomg18ba)+parseInt(datomg18bb)+parseInt(datomg18bc)+
						parseInt(datomg17ba)+parseInt(datomg17bb)+parseInt(datomg17bc)+
						parseInt(datomg16ba)+parseInt(datomg16bb)+parseInt(datomg16bc)+
						parseInt(datomg15ba)+parseInt(datomg15bb)+parseInt(datomg15bc)+
						parseInt(datomg14ba)+parseInt(datomg14bb)+parseInt(datomg14bc)+
						parseInt(datomg13ba)+parseInt(datomg13bb)+parseInt(datomg13bc)+
						parseInt(datomg12ba)+parseInt(datomg12bb)+parseInt(datomg12bc)+
						parseInt(datomg11ba)+parseInt(datomg11bb)+parseInt(datomg11bc);


			var datomg28ba=document.getElementById('mg28b-a').value;
			var datomg28bb=document.getElementById('mg28b-b').value;
			var datomg28bc=document.getElementById('mg28b-c').value;
		
			var datomg27ba=document.getElementById('mg27b-a').value;
			var datomg27bb=document.getElementById('mg27b-b').value;
			var datomg27bc=document.getElementById('mg27b-c').value;
			
			var datomg26ba=document.getElementById('mg26b-a').value;
			var datomg26bb=document.getElementById('mg26b-b').value;
			var datomg26bc=document.getElementById('mg26b-c').value;
			
			var datomg25ba=document.getElementById('mg25b-a').value;
			var datomg25bb=document.getElementById('mg25b-b').value;
			var datomg25bc=document.getElementById('mg25b-c').value;
			
			var datomg24ba=document.getElementById('mg24b-a').value;
			var datomg24bb=document.getElementById('mg24b-b').value;
			var datomg24bc=document.getElementById('mg24b-c').value;
			
			var datomg23ba=document.getElementById('mg23b-a').value;
			var datomg23bb=document.getElementById('mg23b-b').value;
			var datomg23bc=document.getElementById('mg23b-c').value;
			
			var datomg22ba=document.getElementById('mg22b-a').value;
			var datomg22bb=document.getElementById('mg22b-b').value;
			var datomg22bc=document.getElementById('mg22b-c').value;
		
			var datomg21ba=document.getElementById('mg21b-a').value;
			var datomg21bb=document.getElementById('mg21b-b').value;
			var datomg21bc=document.getElementById('mg21b-c').value;

			var total28bm=parseInt(datomg28ba)+parseInt(datomg28bb)+parseInt(datomg28bc)+
						parseInt(datomg27ba)+parseInt(datomg27bb)+parseInt(datomg27bc)+
						parseInt(datomg26ba)+parseInt(datomg26bb)+parseInt(datomg26bc)+
						parseInt(datomg25ba)+parseInt(datomg25bb)+parseInt(datomg25bc)+
						parseInt(datomg24ba)+parseInt(datomg24bb)+parseInt(datomg24bc)+
						parseInt(datomg23ba)+parseInt(datomg23bb)+parseInt(datomg23bc)+
						parseInt(datomg22ba)+parseInt(datomg22bb)+parseInt(datomg22bc)+
						parseInt(datomg21ba)+parseInt(datomg21bb)+parseInt(datomg21bc);	

			var datomg38ba=document.getElementById('mg38b-a').value;
			var datomg38bb=document.getElementById('mg38b-b').value;
			var datomg38bc=document.getElementById('mg38b-c').value;
		
			var datomg37ba=document.getElementById('mg37b-a').value;
			var datomg37bb=document.getElementById('mg37b-b').value;
			var datomg37bc=document.getElementById('mg37b-c').value;
			
			var datomg36ba=document.getElementById('mg36b-a').value;
			var datomg36bb=document.getElementById('mg36b-b').value;
			var datomg36bc=document.getElementById('mg36b-c').value;
			
			var datomg35ba=document.getElementById('mg35b-a').value;
			var datomg35bb=document.getElementById('mg35b-b').value;
			var datomg35bc=document.getElementById('mg35b-c').value;
			
			var datomg34ba=document.getElementById('mg34b-a').value;
			var datomg34bb=document.getElementById('mg34b-b').value;
			var datomg34bc=document.getElementById('mg34b-c').value;
			
			var datomg33ba=document.getElementById('mg33b-a').value;
			var datomg33bb=document.getElementById('mg33b-b').value;
			var datomg33bc=document.getElementById('mg33b-c').value;
			
			var datomg32ba=document.getElementById('mg32b-a').value;
			var datomg32bb=document.getElementById('mg32b-b').value;
			var datomg32bc=document.getElementById('mg32b-c').value;
		
			var datomg31ba=document.getElementById('mg31b-a').value;
			var datomg31bb=document.getElementById('mg31b-b').value;
			var datomg31bc=document.getElementById('mg31b-c').value;

			var total38bm=parseInt(datomg38ba)+parseInt(datomg38bb)+parseInt(datomg38bc)+
						parseInt(datomg37ba)+parseInt(datomg37bb)+parseInt(datomg37bc)+
						parseInt(datomg36ba)+parseInt(datomg36bb)+parseInt(datomg36bc)+
						parseInt(datomg35ba)+parseInt(datomg35bb)+parseInt(datomg35bc)+
						parseInt(datomg34ba)+parseInt(datomg34bb)+parseInt(datomg34bc)+
						parseInt(datomg33ba)+parseInt(datomg33bb)+parseInt(datomg33bc)+
						parseInt(datomg32ba)+parseInt(datomg32bb)+parseInt(datomg32bc)+
						parseInt(datomg31ba)+parseInt(datomg31bb)+parseInt(datomg31bc);
			
			var datomg48ba=document.getElementById('mg48b-a').value;
			var datomg48bb=document.getElementById('mg48b-b').value;
			var datomg48bc=document.getElementById('mg48b-c').value;
		
			var datomg47ba=document.getElementById('mg47b-a').value;
			var datomg47bb=document.getElementById('mg47b-b').value;
			var datomg47bc=document.getElementById('mg47b-c').value;
			
			var datomg46ba=document.getElementById('mg46b-a').value;
			var datomg46bb=document.getElementById('mg46b-b').value;
			var datomg46bc=document.getElementById('mg46b-c').value;
			
			var datomg45ba=document.getElementById('mg45b-a').value;
			var datomg45bb=document.getElementById('mg45b-b').value;
			var datomg45bc=document.getElementById('mg45b-c').value;
			
			var datomg44ba=document.getElementById('mg44b-a').value;
			var datomg44bb=document.getElementById('mg44b-b').value;
			var datomg44bc=document.getElementById('mg44b-c').value;
			
			var datomg43ba=document.getElementById('mg43b-a').value;
			var datomg43bb=document.getElementById('mg43b-b').value;
			var datomg43bc=document.getElementById('mg43b-c').value;
			
			var datomg42ba=document.getElementById('mg42b-a').value;
			var datomg42bb=document.getElementById('mg42b-b').value;
			var datomg42bc=document.getElementById('mg42b-c').value;
		
			var datomg41ba=document.getElementById('mg41b-a').value;
			var datomg41bb=document.getElementById('mg41b-b').value;
			var datomg41bc=document.getElementById('mg41b-c').value;

			var total48bm=parseInt(datomg48ba)+parseInt(datomg48bb)+parseInt(datomg48bc)+
						parseInt(datomg47ba)+parseInt(datomg47bb)+parseInt(datomg47bc)+
						parseInt(datomg46ba)+parseInt(datomg46bb)+parseInt(datomg46bc)+
						parseInt(datomg45ba)+parseInt(datomg45bb)+parseInt(datomg45bc)+
						parseInt(datomg44ba)+parseInt(datomg44bb)+parseInt(datomg44bc)+
						parseInt(datomg43ba)+parseInt(datomg43bb)+parseInt(datomg43bc)+
						parseInt(datomg42ba)+parseInt(datomg42bb)+parseInt(datomg42bc)+
						parseInt(datomg41ba)+parseInt(datomg41bb)+parseInt(datomg41bc);
						
			var totalmg=total18m+total28m+total38m+total48m+total18bm+total28bm+total38bm+total48bm;
			var mediapsmg=(totalps+totalmg)/(totalDientes*3);
			var redondeadopsmg = Math.round(mediapsmg*Math.pow(10,2))/Math.pow(10,2);
			
			$("#suma5").text(redondeadopsmg);
	}
	

//FUNCIONES PARA ANCHURA ENCÍA
	
$('#ae18').change(function() {
	if(parseInt(document.getElementById('ae18').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae17').change(function() {
	if(parseInt(document.getElementById('ae17').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae16').change(function() {
	if(parseInt(document.getElementById('ae16').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae15').change(function() {
	if(parseInt(document.getElementById('ae15').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae14').change(function() {
	if(parseInt(document.getElementById('ae14').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae13').change(function() {
	if(parseInt(document.getElementById('ae13').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae12').change(function() {
	if(parseInt(document.getElementById('ae12').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae11').change(function() {
	if(parseInt(document.getElementById('ae11').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});

$('#ae28').change(function() {
	if(parseInt(document.getElementById('ae28').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae27').change(function() {
	if(parseInt(document.getElementById('ae27').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae26').change(function() {
	if(parseInt(document.getElementById('ae26').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae25').change(function() {
	if(parseInt(document.getElementById('ae25').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae24').change(function() {
	if(parseInt(document.getElementById('ae24').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae23').change(function() {
	if(parseInt(document.getElementById('ae23').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae22').change(function() {
	if(parseInt(document.getElementById('ae22').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae21').change(function() {
	if(parseInt(document.getElementById('ae21').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
	
	$('#ae48b').change(function() {
	if(parseInt(document.getElementById('ae48b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae47b').change(function() {
	if(parseInt(document.getElementById('ae47b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae46b').change(function() {
	if(parseInt(document.getElementById('ae46b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae45b').change(function() {
	if(parseInt(document.getElementById('ae45b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae44b').change(function() {
	if(parseInt(document.getElementById('ae44b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae43b').change(function() {
	if(parseInt(document.getElementById('ae43b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae42b').change(function() {
	if(parseInt(document.getElementById('ae42b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae41b').change(function() {
	if(parseInt(document.getElementById('ae41b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});

$('#ae38b').change(function() {
	if(parseInt(document.getElementById('ae38b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae37b').change(function() {
	if(parseInt(document.getElementById('ae37b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae36b').change(function() {
	if(parseInt(document.getElementById('ae36b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae35b').change(function() {
	if(parseInt(document.getElementById('ae35b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae34b').change(function() {
	if(parseInt(document.getElementById('ae34b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae33b').change(function() {
	if(parseInt(document.getElementById('ae33b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae32b').change(function() {
	if(parseInt(document.getElementById('ae32b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});
$('#ae31b').change(function() {
	if(parseInt(document.getElementById('ae31b').value)<3){
  		$(this).css("color","red");
  	}else{
		$(this).css("color","black");
	}
});

//FUNCIONES PARA SANGRADO
	
$('#s18-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s18-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s18-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s17-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s17-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s17-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s16-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s16-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s16-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s15-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s15-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s15-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s14-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s14-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s14-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s13-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s13-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s13-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s12-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s12-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s12-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s11-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s11-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s11-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p18-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p18-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p18-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p17-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p17-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p17-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p16-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p16-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p16-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p15-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p15-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p15-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p14-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p14-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p14-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p13-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p13-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p13-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p12-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p12-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p12-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p11-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p11-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p11-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);




$('#s21-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s21-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s21-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s22-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s22-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s22-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s23-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s23-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s23-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s24-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s24-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s24-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s25-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s25-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s25-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s26-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s26-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s26-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s27-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s27-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s27-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s28-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s28-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s28-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p21-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p21-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p21-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p22-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p22-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p22-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p23-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p23-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p23-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p24-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p24-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p24-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p25-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p25-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p25-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p26-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p26-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p26-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p27-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p27-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p27-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p28-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p28-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p28-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#s18b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s18b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s18b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s17b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s17b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s17b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s16b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s16b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s16b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s15b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s15b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s15b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s14b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s14b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s14b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s13b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s13b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s13b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s12b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s12b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s12b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s11b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s11b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s11b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p18b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p18b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p18b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p17b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p17b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p17b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p16b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p16b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p16b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p15b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p15b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p15b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p14b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p14b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p14b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p13b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p13b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p13b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p12b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p12b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p12b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p11b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p11b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p11b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);


$('#s21b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s21b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s21b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s22b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s22b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s22b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s23b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s23b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s23b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s24b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s24b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s24b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s25b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s25b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s25b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s26b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s26b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s26b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s27b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s27b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s27b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s28b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s28b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s28b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p21b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p21b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p21b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p22b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p22b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p22b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p23b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p23b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p23b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p24b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p24b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p24b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p25b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p25b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p25b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p26b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p26b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p26b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p27b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p27b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p27b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p28b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p28b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p28b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

//SEGUNDA PARTE
$('#s48-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s48-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s48-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s47-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s47-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s47-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s46-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s46-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s46-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s45-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s45-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s45-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s44-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s44-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s44-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s43-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s43-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s43-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s42-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s42-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s42-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s41-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s41-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s41-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p48-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p48-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p48-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p47-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p47-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p47-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p46-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p46-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p46-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p45-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p45-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p45-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p44-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p44-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p44-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p43-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p43-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p43-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p42-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p42-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p42-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p41-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p41-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p41-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);


$('#s31-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s31-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s31-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s32-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s32-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s32-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s33-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s33-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s33-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s34-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s34-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s34-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s35-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s35-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s35-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s36-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s36-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s36-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s37-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s37-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s37-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s38-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s38-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s38-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p31-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p31-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p31-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p32-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p32-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p32-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p33-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p33-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p33-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p34-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p34-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p34-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p35-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p35-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p35-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p36-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p36-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p36-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p37-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p37-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p37-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p38-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p38-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p38-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#s48b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s48b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s48b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s47b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s47b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s47b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s46b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s46b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s46b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s45b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s45b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s45b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s44b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s44b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s44b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s43b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s43b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s43b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s42b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s42b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s42b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s41b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s41b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s41b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p48b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p48b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p48b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p47b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p47b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p47b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p46b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p46b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p46b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p45b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p45b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p45b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p44b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p44b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p44b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p43b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p43b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p43b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p42b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p42b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p42b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p41b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p41b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p41b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);


$('#s31b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s31b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s31b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);

$('#s32b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		 totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		 totalSangrado--;
		 getSangrado();
      }
);
$('#s32b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s32b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
	
$('#s33b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s33b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s33b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);	
$('#s34b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s34b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s34b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s35b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s35b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s35b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s36b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s36b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s36b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s37b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s37b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s37b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s38b-a').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s38b-b').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);
$('#s38b-c').toggle(
      function () {
        $(this).css({"background":"#FA5858"});
		totalSangrado++;
		 getSangrado();
      },
	  function () {
        $(this).css({"background":"url('img/sangrado-supuracion.png')"});
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalSangrado--;
		 getSangrado();
      }
);

//PLACA
$('#p31b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p31b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p31b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);

$('#p32b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p32b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p32b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
	
$('#p33b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p33b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p33b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);	
$('#p34b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p34b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p34b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p35b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p35b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p35b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});		
		totalPlaca--;
		getPlaca();
      }
);
$('#p36b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p36b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p36b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p37b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p37b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p37b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p38b-a').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p38b-b').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);
$('#p38b-c').toggle(
      function () {
        $(this).css({"background":"#58ACFA"});
		totalPlaca++;
		getPlaca();
      },
      function () {
        $(this).css({"background":"#FFFFFF"});
		totalPlaca--;
		getPlaca();
      }
);