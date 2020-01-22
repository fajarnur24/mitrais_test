<style>
.tooltip2 {
  position: relative;
  display: inline-block;
  width: 100%;

}

.tooltip2 .tooltiptext2 {
      float: right;
  visibility: visible;
  width: auto;
  background-color: #F44336;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding-right: 30px;
  padding-left: 30px;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  right: 0;
  opacity: 1;
  transition: opacity 0.3s;
}
.tooltip2 .tooltiptext2 p {
    margin-bottom: 0;
}

.tooltip2 .tooltiptext2::after {
  content: "";
  position: absolute;
  top: 100%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #F44336 transparent transparent transparent;
}

.tooltip2 .tooltiptext2 {
  visibility: visible;
  opacity: 1;
}


.form-register {
    margin: auto;
}
.dob label{
    display: block;
}
.dob select {
    display: inline-block;
    float: left;
    margin-right: 20px;
    margin-bottom: 15px;
}
button.register {
    width: 100%;
    background: #9C27B0;
    border-color: #9C27B0;
}
button.footer {
    width: 100%;
    border-radius: 0;
    height: 100px;
    background: #9C27B0;
    border-color: #9C27B0;
}
.form-group.email{
    display: block;
}
</style>
<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
   
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6 form-register">

            <div class="card">
                <div class="card-header">
                    Registration
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="tooltip2">
                                <div class="tooltiptext2"><?= form_error('phone'); ?></div>
                            </div>
                            <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control" id="phone" placeholder="Mobile Phone">
                            
                        </div>
                        <div class="form-group">
                            <div class="tooltip2">
                                <div class="tooltiptext2"><?= form_error('first_name'); ?></div>
                            </div>
                            <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" class="form-control" id="first_name" placeholder="First Name">
                            
                        </div>
                        <div class="form-group">
                            <div class="tooltip2">
                                <div class="tooltiptext2"><?= form_error('last_name'); ?></div>
                            </div>
                            <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" class="form-control" id="last_name" placeholder="Last Name">
                            
                        </div>
                        <div class="form-group dob">
                            <label  for="dob">Date Of Birth</label>
                            <select  class="form-control col-md-2" style="display: inline-block;" id="day" name="day">
                                <option selected="selected" <?php echo  set_select('day', '', TRUE); ?>>Day</option>
                                <?php
                                for($a=1; $a<=31; $a+=1){ ?>
                                    <option <?php echo  set_select('day', $a); ?> value="<?= $a ?>"> <?= $a ?> </option>
                               <?php }
                                ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('day'); ?></small>

                            <select  class="form-control col-md-3" id="month" name="month">
                                <option selected="selected" <?php echo  set_select('month', '', TRUE); ?>>Month</option>
                                    <?php
                                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    $jlh_bln=count($bulan);
                                    for($c=0; $c<$jlh_bln; $c+=1){
                                        ?>
                                        <option  <?php echo  set_select('month', $bulan[$c]); ?> value="<?= $c+1 ?>"> <?= $bulan[$c] ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('month'); ?></small>

                            <select  class="form-control col-md-3" id="years" name="years">
                                <option selected="selected" <?php echo  set_select('years', '', TRUE); ?> >Years</option>
                                <?php
                                for($y=1950;$y<=date("Y");$y++)
                                {
                                ?>
                                    <option value="<?php echo $y;?>" <?php echo  set_select('years', $y); ?> ><?php echo $y;?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('years'); ?></small>

                        </div>
                        <div class="form-group email">
                            <div class="tooltip2">
                                <div class="tooltiptext2"><?= form_error('email'); ?></div>
                            </div>
                            <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email" placeholder="Email">
                            
                        </div>
                        <div class="form-group">
                            <input type="radio" name="gender" <?php echo  set_radio('gender', 'male', TRUE); ?> value="male"> Male
                            <input type="radio" name="gender" <?php echo  set_radio('gender', 'female'); ?> value="female"> Female
                        </div>
                        <button type="submit" name="Register" class="btn btn-primary register">Register</button>
                    </form>

                </div>
                <button  name="Register" class="btn btn-primary footer">Footer</button>
            </div>


        </div>
    </div>

</div>
