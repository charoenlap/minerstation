  <?php
    require_once(__DIR__.'/../inc/header.php');
    require_once(__DIR__.'/../inc/sidebar.php');
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="page">
      <div class="page-content container-fluid">
        
        <?php require_once(__DIR__.'/../inc/menu-dashboard.php'); ?>

        <div class="row">
          <div class="col-lg-12">
            <!-- Widget Current Chart -->
            <div class="card card-shadow">
              <div class="card-header bg-white">
                <div class="row">
                  <div class="col-md-10">
                    <h4>การมาทำงานในแต่ละวันของเด็ก <small>Dairy Work Girls Report</small></h4>
                  </div>
                  <div class="col-md-2">
                    <select name="" id="graph_type" class="form-control">
                      <option value="dairy">Dairy Work Girls Report</option>
                      <option value="week">曜日別出勤データ</option>
                      <option value="month3">３ヶ月比較データ</option>
                      <option value="customer">顧客来店状況 Customer data</option>
                      <option value="dataBuy">当月の来客人数 Drink, Food, En Data</option>
                      <option value="yearCustomer">来客傾向グラフ Yearly Customer's Data</option>
                      <option value="visit">Customer visit</option>
                    </select>
                  </div>
                </div>
                <hr>
              </div>
              <div class="p-30 white">
                <!-- <div class="example example-responsive">
                  <div class="width-sm-400" id="exampleFlotMix"></div>
                </div> -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon md-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" data-plugin="datepicker" id="date_start" data-format="yyyy-mm-dd" value="<?php echo date('Y-m-01');?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon md-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" data-plugin="datepicker" id="date_start" data-format="yyyy-mm-dd" value="<?php echo date('Y-m-d');?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <select name="" id="shop_id" class="form-control">
                      <?php foreach($list_shop as $val){?>
                      <option value="<?php echo $val['shop_id']; ?>"><?php echo $val['shop_name_en']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <input type="submit" value="Search" class="btn-primary" id="btn-search-graph">
                  </div>
                </div>
                <div class="example example-responsive">
                  <div id="chart_div" style="width: 100%;"></div>
                </div>
              </div>
              <div class="bg-white p-30 font-size-14">
                <div class="row">
                  <div class="col-lg-12">
                    <h4>Data to <?php echo date('Y-m-d');?></h4>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <p>การมาทำงานโดยเฉลี่ยของเด็กในแต่ละวัน</p>
                    <h5><?php echo $avgLastToToday['avg']; ?> คน</h5>
                    <i class="icon md-long-arrow-<?php echo $avgLastToToday['week_result'];?>  font-size-16"></i> <?php echo $avgLastToToday['avg_week']; ?>% From this week <?php echo $avgLastToToday['week']; ?> คน
                  </div>
                  <div class="col-lg-3">
                    <p>新人率</p>
                    <h5><?php echo $avgLastToToday['new']; ?> คน</h5>
                    <i class="icon md-long-arrow-down red-500 font-size-16"></i> <?php echo $avgLastToToday['new_week']; ?>% From this yesterday
                  </div>
                  <div class="col-lg-3">
                    <p>จำนวนลูกค้าในเดือนนี้</p>
                    <h5><?php echo $avgLastToToday['customer']; ?> คน (<?php echo $avgLastToToday['customer_avg']; ?> คน/วัน)</h5>
                    <i class="icon md-long-arrow-down red-500 font-size-16"></i> <?php echo $avgLastToToday['customer_week']; ?>% From this yesterday
                  </div>
                  <div class="col-lg-3">
                    <p>จำนวนดื่มในเดือนนี้</p>
                    <h5><?php echo $avgLastToToday['drink']; ?> แก้ว (<?php echo $avgLastToToday['drink_avg']; ?>แก้ว/ลูกค้า)</h5>
                    <i class="icon md-long-arrow-down red-500 font-size-16"></i> <?php echo $avgLastToToday['drink_week']; ?>% From this yesterday
                  </div>
                </div>
              </div>
            </div>
            <!-- End Widget Current Chart -->
          </div>


          <div class="col-lg-6">
            <div class="card card-shadow">
             <div class="card-header bg-white">
               <h4>สถานะการจอง <small>Reserve</small></h4>
               <hr>
               <table class="table table-bordered">
                 <thead>
                   <tr class="bg-dark">
                     <th class="text-white"></th>
                     <th class="text-white">ชื่อลูกค้า</th>
                     <th class="text-center text-white">วันที่ลูกค้าเข้า</th>
                     <th class="text-center text-white">คนที่ลูกค้าจอง</th>
                   </tr>
                 </thead>
                 <tbody>
                  <?php $i=1;foreach($list_reservation as $val){ ?>
                   <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $val['r_c_name']; ?></td>
                      <td><?php echo $val['reserv_date']; ?></td>
                      <td class="text-center">
                        <div style="background:url('../uploads/photo/<?php echo $val['girls_image'];?>');background-size:cover;background-position:center;width:50px;height:70px;"></div>
                      </td>
                   </tr>
                  <?php } ?>
                 </tbody>
               </table>
             </div>
            </div>
          </div>
          <div class="col-lg-6">
            
            <div class="card card-shadow">
             <div class="card-header bg-white">
               <h4>สถานะการจอง <small>Reserve</small></h4>
               <hr>
             </div>
             <div class="card-body">
               <?php echo $calendar; ?>
             </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-shadow">
             <div class="card-header bg-white">
               <h5>มาทำงาน5อันดับแรก <small>WORK IN</small></h5>
             </div>
             <div class="card-body">
              <?php $i=1;foreach($ranking_work_in as $val){ ?>
               <div class="row">
                 <div class="col-lg-5">
                   <div style="width:100px;height:130px;background:url('../uploads/photo/<?php echo $val['girls_image'];?>');background-size:cover;background-position:top center;"></div>
                 </div>
                 <div class="col-lg-7">
                  <ul class="list-unstyled">
                    <li><?php echo $i++;?>: No.<?php echo $val['girls_no'].' '.$val['girls_nickname'];?></li>
                    <li>Work <?php echo $val['work'];?>ครั้ง</li>
                    <li>Drink <?php echo $val['drink'];?>แก้ว</li>
                    <li>OT <?php echo $val['ot'];?>ครั้ง</li>
                    <li>RP <?php echo $val['rp'];?>ครั้ง</li>
                    <li>DH <?php echo $val['dh'];?>ครั้ง</li>
                    <li>EN <?php echo $val['en'];?>ชั่วโมง</li>
                    <li>Food <?php echo $val['food'];?>จาน</li>
                  </ul>
                 </div>
               </div>
              <?php } ?>
             </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-shadow">
             <div class="card-header bg-white">
                <h5>เพย์บาร์5อันดับแรก <small>GO TOGTHER</small></h5>
             </div>
             <div class="card-body">
              <?php $i=1;foreach($ranking_pay_bar as $val){?>
                <div class="row">
                 <div class="col-lg-5">
                   <div style="width:100px;height:130px;background:url('../uploads/photo/<?php echo $val['girls_image'];?>');background-size:cover;background-position:top center;"></div>
                 </div>
                 <div class="col-lg-7">
                  <ul class="list-unstyled">
                    <li><?php echo $i++;?>: No.<?php echo $val['girls_no'].' '.$val['girls_nickname'];?></li>
                    <li>Paybar <?php echo $val['count_girls_id'];?>ครั้ง</li>
                  </ul>
                 </div>
               </div>
              <?php } ?>
               <!-- <div class="row">
                 <div class="col-lg-5">
                   <img src="http://placehold.it/1200x1080/" alt="" width="100%">
                 </div>
                 <div class="col-lg-7">
                  <ul class="list-unstyled">
                    <li>1: No.53 Wan</li>
                    <li>Work 21ครั้ง</li>
                    <li>Drink 37แก้ว</li>
                    <li>OT 9ครั้ง</li>
                    <li>RP 2ครั้ง</li>
                    <li>DH 0ครั้ง</li>
                    <li>EN 0.5ชั่วโมง</li>
                    <li>Food 9จาน</li>
                  </ul>
                 </div>
               </div> -->
             </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-shadow">
             <div class="card-header bg-white">
                <h5>ดื่ม5อันดับแรก <small>Drink GIRLS</small></h5>
             </div>
             <div class="card-body">
               <?php $i=1;foreach($ranking_drink as $val){ ?>
               <div class="row">
                 <div class="col-lg-5">
                   <div style="width:100px;height:130px;background:url('../uploads/photo/<?php echo $val['girls_image'];?>');background-size:cover;background-position:top center;"></div>
                 </div>
                 <div class="col-lg-7">
                  <ul class="list-unstyled">
                    <li><?php echo $i++;?>: No.<?php echo $val['girls_no'].' '.$val['girls_nickname'];?></li>
                    <li>Work <?php echo $val['work'];?>ครั้ง</li>
                    <li>Drink <?php echo $val['drink'];?>แก้ว</li>
                    <li>OT <?php echo $val['ot'];?>ครั้ง</li>
                    <li>RP <?php echo $val['rp'];?>ครั้ง</li>
                    <li>DH <?php echo $val['dh'];?>ครั้ง</li>
                    <li>EN <?php echo $val['en'];?>ชั่วโมง</li>
                    <li>Food <?php echo $val['food'];?>จาน</li>
                  </ul>
                 </div>
               </div>
              <?php } ?>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <input type="hidden" id="url" value="<?php echo MURL.'admin/';?>">
    <script type="text/javascript" src="assets/theme/graph.js"></script>
<style>
  /*******************************Calendar Top Navigation*********************************/
div#calendar{
  margin:0px auto;
  padding:0px;
  width: 602px;
  font-family:Helvetica, "Times New Roman", Times, serif;
}
 
div#calendar div.box{
    position:relative;
    top:0px;
    left:0px;
    width:100%;
    height:40px;
    background-color:   #787878 ;      
}
 
div#calendar div.header{
    line-height:40px;  
    vertical-align:middle;
    position:absolute;
    left:11px;
    top:0px;
    width:582px;
    height:40px;   
    text-align:center;
}
 
div#calendar div.header a.prev,div#calendar div.header a.next{ 
    position:absolute;
    top:0px;   
    height: 17px;
    display:block;
    cursor:pointer;
    text-decoration:none;
    color:#FFF;
}
 
div#calendar div.header span.title{
    color:#FFF;
    font-size:18px;
}
 
 
div#calendar div.header a.prev{
    left:0px;
}
 
div#calendar div.header a.next{
    right:0px;
}
 
 
 
 
/*******************************Calendar Content Cells*********************************/
div#calendar div.box-content{
    border:1px solid #787878 ;
    border-top:none;
}
 
 
 
div#calendar ul.label{
    float:left;
    margin: 0px;
    padding: 0px;
    margin-top:5px;
    margin-left: 5px;
}
 
div#calendar ul.label li{
    margin:0px;
    padding:0px;
    margin-right:5px;  
    float:left;
    list-style-type:none;
    width:80px;
    height:40px;
    line-height:40px;
    vertical-align:middle;
    text-align:center;
    color:#000;
    font-size: 15px;
    background-color: transparent;
}
 
 
div#calendar ul.dates{
    float:left;
    margin: 0px;
    padding: 0px;
    margin-left: 5px;
    margin-bottom: 5px;
}
 
/** overall width = width+padding-right**/
div#calendar ul.dates li {
    margin: 0px;
    padding: 0px;
    margin-right: 5px;
    margin-top: 5px;
    line-height: 20px;
    vertical-align: middle;
    float: left;
    list-style-type: none;
    width: 80px;
    height: 20px;
    font-size: 14px;
    background-color: #DDD;
    color: #000;
    text-align: center;
}
 
:focus{
    outline:none;
}
 
div.clear{
    clear:both;
}     
</style>