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
    
    <div class="row mt-3">
        <div class="col-md-6 form-register">

            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="tooltip2">
                                <div class="tooltiptext2"><?= form_error('email'); ?></div>
                            </div>
                            <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email" placeholder="Email">
                            
                        </div>
                        <div class="form-group">
                            <div class="tooltip2">
                                <div class="tooltiptext2"><?= form_error('password'); ?></div>
                            </div>
                            <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" id="password" placeholder="Password">
                            
                        </div>
                        
                        <button type="submit" name="Register" class="btn btn-primary register">Login</button>
                    </form>

                </div>
                <button  name="Register" class="btn btn-primary footer">Footer</button>
            </div>


        </div>
    </div>

</div>
