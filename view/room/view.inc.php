<div class="container rooms" id="room">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="text-left rooms-center">
                <h1>
                    ROOM
                    <span>
                        S
                    </span>
                </h1>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="" style="padding-bottom:8%;">

                <h4 class="font-weight-light">
                    <span class="text-detail-room p-0">
                        <?php if ($lng == TH) {  echo $contact_us[0]['contact_us_title_th'];   }else { echo $contact_us[0]['contact_us_title_en'];  }  ?>
                    </span>
                </h4>
                <p class="font-weight-light">
                    <span class="text-detail-room">
                        <?php if ($lng == TH) {  echo $contact_us[0]['contact_us_sub_title_th'];   }else { echo $contact_us[0]['contact_us_sub_title_en'];  }  ?>

                    </span>
                </p>
                <hr>
                <div>
                    <span class="h3"><i class="fab fa-facebook-square" style="font-size:30px;"></i></span>
                    <span>
                        <a href="<?PHP echo $contact_us[0]['contact_us_facebook']; ?>">
                            Gunthpat Place
                        </a>
                    </span>
                </div>
                <div>
                    <span class="h3"><i class="fas fa-phone-volume" style="font-size:30px;"></i></span>
                    <span>
                        <a href="<?PHP echo $contact_us[0]['contact_us_tel']; ?>">
                            <?PHP echo $contact_us[0]['contact_us_tel']; ?>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?PHP for ($i=0; $i < count($rooms); $i++) { ?>
        <div class="col-lg-4 col-md-6">
            <div class="shadow-lg p-3 mb-5 bg-white rounded;">
                <section class="slide" style="padding:0%; margin:-16">
                    <!-- <?php for ($j = 0; $j < count($roomBy = $rooms_model -> getRoomsBy($rooms[$i]['room_id'])); ++$j) {    ?>
                    <img style=" width: 100px; height: 200px; object-fit: cover;"
                        src="<?php if ($roomBy[$j]['gallery_img'] == null ) {
                            echo $img_path_room . $roomBy[$j]['room_img'];
                        }else {
                            echo $img_path_gallery. $roomBy[$j]['gallery_img'];
                         } ?>">
                    <?php } ?> -->
                    <img style=" width: 100px; height: 200px; object-fit: cover;" src="<?php echo $img_path_room.$rooms[$i]['room_img'];?>">
                </section>


                <h5 class="font-weight-light;" style="margin-top: 25;">
                    <span class="text-detail-room">

                        <?PHP if ($rooms[$i]['room_name_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $rooms[$i]['room_name_th'];   }else { echo $rooms[$i]['room_name_en'];  } 
                        }  ?>
                    </span>
                </h5>
                <i class="fas fa-home" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span class="text-detail-room">
                    <?PHP if ($rooms[$i]['room_size_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $rooms[$i]['room_size_th'];   }else { echo $rooms[$i]['room_size_en'];  } 
                        }  ?>
                </span>
                <br>
                <i class="fa fa-users" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span class="text-detail-room">
                    <?PHP if ($rooms[$i]['room_detail_1_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $rooms[$i]['room_detail_1_th'];   }else { echo $rooms[$i]['room_detail_1_en'];  } 
                        }  ?>
                </span>
                <br>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span class="text-detail-room">
                    <?PHP if ($rooms[$i]['room_detail_2_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $rooms[$i]['room_detail_2_th'];   }else { echo $rooms[$i]['room_detail_2_en'];  } 
                        }  ?>
                </span>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span class="text-detail-room">
                    <?PHP if ($rooms[$i]['room_detail_3_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $rooms[$i]['room_detail_3_th'];   }else { echo $rooms[$i]['room_detail_3_en'];  } 
                        }  ?>
                </span>
                
                <span class="text-detail-room">


                </span>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span class="text-detail-room">
                    <?PHP if ($rooms[$i]['room_facility_1_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $rooms[$i]['room_facility_1_th'];   }else { echo $rooms[$i]['room_facility_1_en'];  } 
                        }  ?>
                </span>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span class="text-detail-room">
                    <?PHP if ($rooms[$i]['room_facility_2_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $rooms[$i]['room_facility_2_th'];   }else { echo $rooms[$i]['room_facility_2_en'];  } 
                        }  ?>
                </span>
                <br>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="p-3 mb-2 bg-light text-dark" style="padding:0%; margin:-16">
                            <h5 style=" margin-left:30">

                                THB

                                <span style="padding-left:40px;color: #000;">
                                    <?PHP if ($rooms[$i]['room_price_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_price_th'];
                        }  ?>
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row px-3">
                    <div class="col-6 pl-0 pr-1">
                        <a href="javascript:fbShare('<?php echo $roomlink,'room.php?id=',$rooms[$i]['room_id']; ?>','<?php echo $rooms[$i]['room_id']; ?>')">
                            <button type="button" class="btn btn-secondary btn-lg btn-block room-btn-font" style="background-color: #4267b2">
                            <i class="fab fa-facebook-square"></i> <?PHP if ($lng == TH) {  echo "แชร์"; } else {  echo "share"; }?>


                            </button>
                        </a>
                    </div>
                    <div class="col-6 pl-1 pr-0">
                        <a href="room.php?id=<?PHP echo $rooms[$i]['room_id']; ?>#detail">
                            <button type="button" class="btn btn-outline-secondary btn-lg btn-block room-btn-font">
                                    <?PHP if ($lng == TH) {  echo "ดูเพิ่มเติม"; } else {  echo "See more";  }?>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-3">
                        <a href="room.php?action=book&id=<?PHP echo $rooms[$i]['room_id']; ?>&room_id=<?PHP echo $rooms[$i]['room_id']; ?>#book"
                            class="btn btn-orange text-uppercase js-scroll-trigger btn-lg btn-block room-btn-font">

                            <?PHP if ($lng == TH) {  echo "จองเดียวนี้"; } else {  echo "Book this one";  }?>



                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?PHP } ?>
    </div>
</div>
<script>
    function fbShare(url,roomId) {
		$.post( "controls/setRoomIdShare.php", { roomId: roomId })
			.done(function( data ) {
                window.open('http://www.facebook.com/sharer.php?&p	[url]=' + url);
		});
    }
</script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".slide").slick({
            arrows: false,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2500,
        });
    });
</script>