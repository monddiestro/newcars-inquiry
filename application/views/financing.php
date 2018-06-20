<div class="container-fluid m-t-100">
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered">
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
            <td><?php echo $inquiry->expense; ?></td>
            <td><?php echo $inquiry->bank_rel; ?></td>
            <td><?php echo $inquiry->gender; ?></td>
            <td><?php echo $inquiry->bday; ?></td>
            <td><?php echo $inquiry->citizenship; ?></td>
            <td><?php echo $inquiry->dependents; ?></td>
            <td><?php echo $inquiry->address; ?></td>\
            <td><?php echo $inquiry->time_call; ?></td>
            <td><?php echo $inquiry->date; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </div>
</div>
