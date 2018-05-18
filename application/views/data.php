<div class="container-fluid m-t-100">
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Message</th>
            <th>Plan to buy in</th>
            <th>Bank Auto Loan Approval</th>
            <th>Best time to call</th>
            <th>Model & Variant</th>
            <th>Lead Source</th>
            <th>Date of Inquiry</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($inquiries as $inquiry): ?>
          <tr>
            <td><?php echo $inquiry->inquiry_id; ?></td>
            <td><?php echo ucwords($inquiry->lname) . ", " . ucwords($inquiry->fname); ?></td>
            <td><?php echo $inquiry->contact; ?></td>
            <td><?php echo $inquiry->eadd; ?></td>
            <td><?php echo $inquiry->address; ?></td>
            <td><?php echo $inquiry->message; ?></td>
            <td><?php echo $inquiry->buy_range; ?></td>
            <td><?php echo $inquiry->bank_loan; ?></td>
            <td><?php echo $inquiry->time_call; ?></td>
            <td><?php echo $inquiry->model; ?></td>
            <td><?php echo $inquiry->source; ?></td>
            <td><?php echo $inquiry->date; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </div>
</div>
