<?php require_once('temp/header.php'); ?>
<?php require_once('temp/sidebar.php'); ?>
<style>
   td{ 
       width: 264px;
   }
</style>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Generate Admit Card</h4>
                                    <div class="page-title-right">
                                    
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
    
        <div class="row">
         <div class="col-lg-12">
            <div class="card">
            <div class="card-header bg-warning">
                Admit Card Issue
            <!--<span class="d-flex justify-content-end">-->
            <button class="btn btn-danger btn-block float-end"  id='insert_btn' >Create Admit Card</button> 
            <!--</span>-->
            </div>
            <div class="card-body">
				<div class='row'>
				
					    
					    
				
					<div class='col-md-2'></div>
					<div class='col-md-4'>
					 <form action ='admit_card' method ='post' id='insert_frm'>
						<div class="form-group">
                          <label>Student Roll No(s) </label>  
							<textarea class="form-control" name='student_id' placeholder='911041010002,911041010006,910541010002' style="height: 163px;"></textarea>
                        </div>
						<!--<div class="form-group">-->
      <!--                    <label>Exam Date</label>  -->
						<!--	<input class="form-control" value='' name='exam_date' type='date' >-->
      <!--                  </div>-->
					</div>
					<div class='col-md-4'>
					    <div class="form-group">
                          <label>Exam Time</label>   
                            <input class="form-control" value='' name='exam_time' type='time' >
                        </div>
						<div class="form-group">
                            <label class="control-label" >Exam Venue</label>
                            <input type="text" class="form-control" name='exam_venue' required>
                        </div>
						 
						<div class="form-group">
                            <label class="control-label" >Notice </label>
                            <input type="text" class="form-control" name='exam_notice' >
                        </div>
						</div>
						</div>
						<div class='row'>
						 <div class='col-md-2'></div>
						 <div class='col-md-8'>
					     <div id="wrapper">
                        <div id="form_div">
                          <table id="student_table" align=center>
                           <tr id="row1">
                            <td><input class="form-control"  type="text" name="exam_papper[]" placeholder="Enter Papper Name"></td>
                            <td><input class="form-control" placeholder="Enter Exam Date"  type="text" name="exam_date[]" onfocus="(this.type='date')"></td>
                            
                           </tr>
                          </table>
                          <div class='d-flex justify-content-center mt-2'>
                          <span class="btn btn-success btn-sm" onclick="add_row();">ADD ROW</span>
                          </div>
                        </div>
                        </div>
                        </div>
                        </div>
					</form>		
				
		</div>
		</div>
		</div>
		</div>
		

<?php require_once('temp/footer.php'); ?>
<script type="text/javascript">
function add_row()
{
 $rowno=$("#student_table tr").length;
 $rowno=$rowno+1;
 $("#student_table tr:last").after("<tr id='row"+$rowno+"'><td><input class='form-control' type='text' name='exam_papper[]' placeholder='Enter Papper Name'></td><td><input class='form-control' type='text' name='exam_date[]' placeholder='Enter Exam Date' onfocus='(this.type=`date`)'></td><td><button class='btn btn-danger btn-sm' onclick=delete_row('row"+$rowno+"')>DELETE</button></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>

