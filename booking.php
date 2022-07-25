<?php	
$tarih11=$_POST['tarih1'];
	$tarih22=$_POST['tarih2'];
	
    $odasayisi=$_POST['odasayisi'];
	$kisisayisi=$_POST['kisisayisi'];
    $cocuksayisi=$_POST['cocuksayisi'];
	$tarih1= date("Y-m-d", strtotime($tarih11));
	$tarih2= date("Y-m-d", strtotime($tarih22));;


	if($cocuksayisi<1){
	
	
	$kn=2;
	$kn2=1;

	
	if($kisisayisi==1){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509101_233951865_2_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=1;group_children=0;hapos=1;highlighted_blocks=595509101_233951865_2_0_0;hpos=1;no_rooms=1;req_adults=1;req_children=0;room1=A;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509101_233951865_2_0_0__29700;srepoch=1576944830;srpvid=f359721e43b901f1;type=total;ucfs=1&';
			//header('Location:url='.$link);

	}
	if($kisisayisi==2){	
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509101_233951865_2_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;highlighted_blocks=595509101_233951865_2_0_0;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509101_233951865_2_0_0__29700;srepoch=1576944861;srpvid=a60f722eff0501a4;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}
		if($kisisayisi==3){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509103_233951865_3_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=3;group_children=0;hapos=1;highlighted_blocks=595509103_233951865_3_0_0;hpos=1;no_rooms=1;req_adults=3;req_children=0;room1=A%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509103_233951865_3_0_0__35699;srepoch=1576944886;srpvid=595b723af2c50140;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}
			if($kisisayisi==4){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509106_233951865_4_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=4;group_children=0;hapos=1;highlighted_blocks=595509106_233951865_4_0_0;hpos=1;no_rooms=1;req_adults=4;req_children=0;room1=A%2CA%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509106_233951865_4_0_0__38700;srepoch=1576946385;srpvid=2c457528f83800b9;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}
	
				if($kisisayisi==5){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509106_233951865_5_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=5;group_children=0;hapos=1;highlighted_blocks=595509106_233951865_5_0_0;hpos=1;no_rooms=1;req_adults=5;req_children=0;room1=A%2CA%2CA%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509106_233951865_5_0_0__41700;srepoch=1576945166;srpvid=8d8172c72bba009f;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}
	
				if($kisisayisi==6){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509105_233951865_6_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=6;group_children=0;hapos=1;highlighted_blocks=595509105_233951865_6_0_0;hpos=1;no_rooms=1;req_adults=6;req_children=0;room1=A%2CA%2CA%2CA%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509105_233951865_6_0_0__50700;srepoch=1576946349;srpvid=8f6d7516a14300e2;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}
	
				if($kisisayisi==7){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509106_233951865_5_0_0%2C595509101_233951865_2_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=7;group_children=0;hapos=1;highlighted_blocks=595509106_233951865_5_0_0%2C595509101_233951865_2_0_0;hpos=1;no_rooms=1;req_adults=7;req_children=0;room1=A%2CA%2CA%2CA%2CA%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509106_233951865_5_0_0__41700%2C595509101_233951865_2_0_0__29700;srepoch=1576947020;srpvid=dd517666fb3b0185;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}
	
					if($kisisayisi==8){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509106_233951865_5_0_0%2C595509103_233951865_3_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=8;group_children=0;hapos=1;highlighted_blocks=595509106_233951865_5_0_0%2C595509103_233951865_3_0_0;hpos=1;no_rooms=1;req_adults=8;req_children=0;room1=A%2CA%2CA%2CA%2CA%2CA%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509106_233951865_5_0_0__41700%2C595509103_233951865_3_0_0__35699;srepoch=1576947092;srpvid=f4247689a6210010;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}

					if($kisisayisi==9){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509106_233951865_5_0_0%2C595509104_233951865_4_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=9;group_children=0;hapos=1;highlighted_blocks=595509106_233951865_5_0_0%2C595509104_233951865_4_0_0;hpos=1;no_rooms=1;req_adults=9;req_children=0;room1=A%2CA%2CA%2CA%2CA%2CA%2CA%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509106_233951865_5_0_0__41700%2C595509104_233951865_4_0_0__38700;srepoch=1576947120;srpvid=5c0e76981e3d00fe;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}

					if($kisisayisi==10){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;all_sr_blocks=595509106_233951865_5_0_0%2C595509105_233951865_5_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=10;group_children=0;hapos=1;highlighted_blocks=595509106_233951865_5_0_0%2C595509105_233951865_5_0_0;hpos=1;no_rooms=1;req_adults=10;req_children=0;room1=A%2CA%2CA%2CA%2CA%2CA%2CA%2CA%2CA%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509106_233951865_5_0_0__41700%2C595509105_233951865_5_0_0__47700;srepoch=1576947274;srpvid=f8b076e508aa0163;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}
		
	
} 
else {
		
		if($kisisayisi==1 && $cocuksayisi==1){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;age=12;all_sr_blocks=595509101_233951865_2_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=1;group_children=1;hapos=1;highlighted_blocks=595509101_233951865_2_0_0;hpos=1;no_rooms=1;req_adults=1;req_age=12;req_children=1;room1=A%2C12;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509101_233951865_2_0_0__98999;srepoch=1576947850;srpvid=e3d67804dbf1004e;type=total;ucfs=1&';
			//header('Location:url='.$link);
	}



if($kisisayisi==1 && $cocuksayisi==2){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;age=10;age=10;all_sr_blocks=595509103_233951865_3_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=1;group_children=2;hapos=1;highlighted_blocks=595509103_233951865_3_0_0;hpos=1;no_rooms=1;req_adults=1;req_age=10;req_age=10;req_children=2;room1=A%2C10%2C10;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509103_233951865_3_0_0__119000;srepoch=1576948009;srpvid=344e7854a1b90096;type=total;ucfs=1&';
				//header('Location:url='.$link);

}

if($kisisayisi==1 && $cocuksayisi==3){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;age=12;age=12;age=12;all_sr_blocks=595509104_233951865_4_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=1;group_children=3;hapos=1;highlighted_blocks=595509104_233951865_4_0_0;hpos=1;no_rooms=1;req_adults=1;req_age=12;req_age=12;req_age=12;req_children=3;room1=A%2C10%2C12%2C12;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509104_233951865_4_0_0__128999;srepoch=1576948087;srpvid=1184787b1ef600bf;type=total;ucfs=1&';
				//header('Location:url='.$link);

}


if($kisisayisi==2 && $cocuksayisi==1){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;age=10;all_sr_blocks=595509103_233951865_3_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=2;group_children=1;hapos=1;highlighted_blocks=595509103_233951865_3_0_0;hpos=1;no_rooms=1;req_adults=2;req_age=10;req_children=1;room1=A%2CA%2C10;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509103_233951865_3_0_0__119000;srepoch=1576948148;srpvid=36e3789a4c9000cb;type=total;ucfs=1&';
				//header('Location:url='.$link);

}

if($kisisayisi==2 && $cocuksayisi==2){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;age=12;age=12;all_sr_blocks=595509104_233951865_4_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=2;group_children=2;hapos=1;highlighted_blocks=595509104_233951865_4_0_0;hpos=1;no_rooms=1;req_adults=2;req_age=12;req_age=12;req_children=2;room1=A%2CA%2C10%2C12;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509104_233951865_4_0_0__128999;srepoch=1576948177;srpvid=28ee78a86ed00187;type=total;ucfs=1&';
				//header('Location:url='.$link);

}

if($kisisayisi==2 && $cocuksayisi==3){
	$link='https://www.booking.com/hotel/fi/aikatalo-hostel-helsinki-city-center.html?aid=304142;label=gen173nr-1FCAEoggI46AdIM1gEaEiIAQGYATG4AQfIAQzYAQHoAQH4AQKIAgGoAgO4AprQ-O8FwAIB;sid=d3e5e4899bc874fe817597a1b4c150da;age=12;age=12;age=12;all_sr_blocks=595509106_233951865_5_0_0;checkin='.$tarih1.';checkout='.$tarih2.';dest_id=-1364995;dest_type=city;dist=0;group_adults=2;group_children=3;hapos=1;highlighted_blocks=595509106_233951865_5_0_0;hpos=1;no_rooms=1;req_adults=2;req_age=12;req_age=12;req_age=12;req_children=3;room1=A%2CA%2C10%2C12%2C12;sb_price_type=total;sr_order=popularity;sr_pri_blocks=595509106_233951865_5_0_0__138999;srepoch=1576948247;srpvid=e77b78cbd77c003a;type=total;ucfs=1&';
				//header('Location:url='.$link);

}

	}
	  ob_start();
   echo '<meta http-equiv="refresh" content="0;'.$link.'" />';
   ob_flush();


?>