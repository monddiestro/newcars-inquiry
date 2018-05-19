<div class="container m-t-100">
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Best time to call</th>
            <th>Model & Variant</th>
            <th>Lead Source</th>
            <th>Date of Inquiry</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($inquiries as $inquiry): ?>
          <tr>
            <td><?php echo ucwords($inquiry->name); ?></td>
            <td><?php echo $inquiry->contact; ?></td>
            <td><?php echo $inquiry->eadd; ?></td>
            <td><?php echo $inquiry->type; ?></td>
            <td><?php echo $inquiry->model; ?></td>
            <td><?php echo $inquiry->price; ?></td>
            <td><?php echo $inquiry->date; ?></td>
            <td>
              <a href="<?php echo base_url('inquiry/finance_details/'.$inquiry->inquiry_id) ?>" class="btn btn-success btn-block">VIEW DETAILS</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </div>
</div>
