<script>
    //---------ฟังชั่นแสดงรูป----------------
    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }else{
            $('#_img').attr('src',   '../img_upload/slideed_rooms/default.jpg');
        }
    }

</script>

<form id="form_target" role="form" method="post" action="index.php?content=home&action=edit" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไข Slide
                        <?PHP echo$id+1;?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="img_slide_o" name="img_slide_o" value="<?php echo  $slide[$id]['slide_img']; ?>" />
            <input type="hidden" id="slide_id" name="slide_id" value="<?php echo  $slide[$id]['slide_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400" src="<?PHP 
                        if ($slide[$id]['slide_img'] != "" || $slide[$id]['slide_img'] != null) { 
                            echo $img_path . $slide[$id]['slide_img']; 
                            } else {
                                echo $img_path . 'default.jpg';
                            }  ?> "
                            class="img-fluid" alt="">
                        <input accept=".jpg , .png" type="file" id="slide_img" name="slide_img" class="form-control"
                            style="margin: 14px 0 0 0 ;" onChange="readURL(this);" value="<?php echo  $slide[$id]['slide_img']; ?>">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row-lg-2">
                        <div class="form-group">
                            <label>Title <font color="#F00"><b>*</b></font></label>
                            <input id="slide_title" name="slide_title" class="form-control" value="<?PHP echo $slide[$id]['slide_title'];?>" />
                            <p class="help-block">Example : Delux Room</p>
                        </div>
                    </div>


                    <div class="row-lg-2">
                        <div class="form-group">
                            <label>Link <font color="#F00"><b>*</b></font></label>
                            <input  id="slide_link" name="slide_link" class="form-control" value="<?PHP echo  $slide[$id]['slide_link'];?>" />
                            <p class="help-block">Example : 2,000 </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Sub Title <font color="#F00"><b>*</b></font></label>
                        <textarea class="form-control" id="slide_sub_title" name="slide_sub_title" aria-label="With textarea"
                            rows="6">
                            <?PHP echo $slide[$id]['slide_sub_title'];?>
                        </textarea>
                        <p class="help-block">Example : มีอาหารเช้าพร้อมบริการ</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</form>