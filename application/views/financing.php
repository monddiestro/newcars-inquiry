<div class="container-fluid m-t-100">
  <div class="row mt-100">
    <div class="col-sm-3">
      <span>From</span>
      <div class='input-group date' id='from'>
        <input type='text' id="from_val" class="form-control" />
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>
    <div class="col-sm-3">
      <span>To</span>
      <div class='input-group date' id='to'>
        <input type='text' id="to_val" class="form-control" />
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>
    <div class="col-sm-3">
      <br/>
      <button type="button" name="button" id="export_financing" class="btn btn-success">Export</button>
      <input type="hidden" name="" id="link" value="<?php echo base_url('export/get_report_financing'); ?>">
    </div>
  </div>
  <div class="row" style="margin-top:20px">
    <div class="col-sm-12">
      <table class="table table-bordered" style="font-size:12px;">
        <thead>
          <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Type</th>
            <th>Model & Variant</th>
            <th>Price</th>
            <th>Loan Purpose</th>
            <th>Downpayment</th>
            <th>Loan Term</th>
            <th>Loan Amount</th>
            <th>Employment Status</th>
            <th>Gross Income</th>
            <th>Expenses</th>
            <th>Bank Relation</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Citizenship</th>
            <th>Dependents</th>
            <th>Address</th>
            <th>Best time to Call</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($inquiries as $inquiry): ?>
          <tr>
            <td><?php echo ucwords($inquiry->name); ?></td>
            <td><?php echo $inquiry->contact; ?></td>
            <td><?php echo $inquiry->email; ?></td>
            <td><?php echo $inquiry->type; ?></td>
            <td><?php echo $inquiry->model; ?></td>
            <td><?php echo $inquiry->price; ?></td>
            <td><?php echo $inquiry->purpose; ?></td>
            <td><?php echo $inquiry->downpayment; ?></td>
            <td><?php echo $inquiry->term; ?></td>
            <td><?php echo $inquiry->amount; ?></td>
            <td><?php echo $inquiry->emp_status; ?></td>
            <td><?php echo $inquiry->income; ?></td>
            
          </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 text-right">
      <?php echo $pagination; ?>
    </div>
  </div>
</div>
