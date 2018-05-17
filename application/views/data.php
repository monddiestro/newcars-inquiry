<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table cellpadding="1" cellspacing="1" border="1">
        <tr>
          <td>ID</td>
          <td>LAST NAME</td>
          <td>FIRST NAME</td>
          <td>CONTACT</td>
          <td>EADD</td>
          <td>ADDRESS</td>
          <td>MESSAGE</td>
          <td>BUY RANGE</td>
          <td>BANK LOAN</td>
          <td>CONTACT ALTERNATIVE</td>
          <td>BEST TIME TO CALL</td>
          <td>MODEL & VARIANT</td>
          <td>LEAD SOURCE</td>
          <td>DATE</td>
        </tr>
      <?php foreach ($inquiries as $inquiry): ?>
        <tr>
          <td><?php echo $inquiry->inquiry_id; ?></td>
          <td><?php echo $inquiry->lname; ?></td>
          <td><?php echo $inquiry->fname; ?></td>
          <td><?php echo $inquiry->contact; ?></td>
          <td><?php echo $inquiry->eadd; ?></td>
          <td><?php echo $inquiry->address; ?></td>
          <td><?php echo $inquiry->message; ?></td>
          <td><?php echo $inquiry->buy_range; ?></td>
          <td><?php echo $inquiry->bank_loan; ?></td>
          <td><?php echo $inquiry->contact_alt; ?></td>
          <td><?php echo $inquiry->time_call; ?></td>
          <td><?php echo $inquiry->model; ?></td>
          <td><?php echo $inquiry->source; ?></td>
          <td><?php echo $inquiry->date; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
