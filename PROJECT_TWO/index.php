<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      background: #fff;
      padding: 30px;
    }

    h2 {
      text-align: right;
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 6px 10px;
      vertical-align: top;
    }

    .label {
      color: #8B0000;
      font-weight: bold;
      width: 160px;
      white-space: nowrap;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      border: 1px solid #999;
      padding: 3px 5px;
      font-size: 14px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      width: 200px;
    }

    textarea {
      width: 260px;
      height: 80px;
      resize: vertical;
    }

    select {
      font-size: 13px;
      padding: 2px;
      border: 1px solid #999;
    }

    .dob-group select {
      margin-right: 2px;
    }

    .hobbies-row td {
      vertical-align: top;
    }

    .qual-table {
      border-collapse: collapse;
      font-size: 13px;
    }

    .qual-table th {
      text-align: left;
      padding: 4px 8px;
      font-weight: bold;
      color: #8B0000;
      border-bottom: 1px solid #ccc;
    }

    .qual-table td {
      padding: 4px 8px;
    }

    .qual-table td.row-num {
      color: #8B0000;
      font-weight: bold;
      width: 20px;
    }

    .qual-table input[type="text"] {
      width: 120px;
    }

    .small-note {
      font-size: 11px;
      color: #555;
      text-align: center;
    }

    .btn-row {
      text-align: center;
      margin-top: 16px;
    }

    .btn-row input[type="submit"],
    .btn-row input[type="reset"] {
      padding: 4px 20px;
      font-size: 14px;
      margin: 0 4px;
    }

    .section-label {
      color: #8B0000;
      font-weight: bold;
      vertical-align: top;
    }
  </style>
</head>
<body>

  <h2>Student Registration Form</h2>

  <form action="register.php" method="POST">
    <table>
      <tr>
        <td class="label">FIRST NAME</td>
        <td><input type="text" name="first_name" /></td>
      </tr>
      <tr>
        <td class="label">LAST NAME</td>
        <td><input type="text" name="last_name" /></td>
      </tr>
      <tr>
        <td class="label">DATE OF BIRTH</td>
        <td class="dob-group">
          <select name="dob_day">
            <option value="">Day:</option>
            <?php for($d=1;$d<=31;$d++) echo "<option value='$d'>$d</option>"; ?>
          </select>
          <select name="dob_month">
            <option value="">Month:</option>
            <?php
              $months = ['January','February','March','April','May','June',
                         'July','August','September','October','November','December'];
              foreach($months as $i=>$m) echo "<option value='".($i+1)."'>$m</option>";
            ?>
          </select>
          <select name="dob_year">
            <option value="">Year:</option>
            <?php for($y=date('Y');$y>=1950;$y--) echo "<option value='$y'>$y</option>"; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label">EMAIL ID</td>
        <td><input type="email" name="email" /></td>
      </tr>
      <tr>
        <td class="label">MOBILE NUMBER</td>
        <td><input type="tel" name="mobile" /></td>
      </tr>
      <tr>
        <td class="label">GENDER</td>
        <td>
          Male <input type="radio" name="gender" value="Male" />
          &nbsp; Female <input type="radio" name="gender" value="Female" />
        </td>
      </tr>
      <tr>
        <td class="label">ADDRESS</td>
        <td><textarea name="address"></textarea></td>
      </tr>
      <tr>
        <td class="label">CITY</td>
        <td><input type="text" name="city" /></td>
      </tr>
      <tr>
        <td class="label">PIN CODE</td>
        <td><input type="text" name="pin_code" /></td>
      </tr>
      <tr>
        <td class="label">STATE</td>
        <td><input type="text" name="state" /></td>
      </tr>
      <tr>
        <td class="label">COUNTRY</td>
        <td>
          <select name="country">
            <option value="Rwanda">Rwanda</option>
            <option value="Uganda">Uganda</option>
            <option value="Kenya">Kenya</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Burundi">Burundi</option>
            <option value="DRC">DRC</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="France">France</option>
            <option value="Other">Other</option>
          </select>
        </td>
      </tr>
      <tr class="hobbies-row">
        <td class="label">HOBBIES</td>
        <td>
          Drawing <input type="checkbox" name="hobbies[]" value="Drawing" />
          Singing <input type="checkbox" name="hobbies[]" value="Singing" />
          Dancing <input type="checkbox" name="hobbies[]" value="Dancing" />
          Sketching <input type="checkbox" name="hobbies[]" value="Sketching" /><br />
          Others <input type="checkbox" name="hobbies[]" value="Others" />
          <input type="text" name="other_hobby" style="width:120px;" />
        </td>
      </tr>

      <tr>
        <td class="section-label">QUALIFICATION</td>
        <td>
          <table class="qual-table">
            <tr>
              <th>Sl.No.</th>
              <th>Examination</th>
              <th>Board</th>
              <th>Percentage</th>
              <th>Year of Passing</th>
            </tr>
            <?php
              $exams = ['Class X', 'Class XII', 'Graduation', 'Masters'];
              foreach($exams as $i => $exam):
                $n = $i+1;
            ?>
            <tr>
              <td class="row-num"><?= $n ?></td>
              <td><?= $exam ?></td>
              <td><input type="text" name="board[<?= $n ?>]" maxlength="10" /></td>
              <td><input type="text" name="percentage[<?= $n ?>]" style="width:100px;" /></td>
              <td><input type="text" name="year[<?= $n ?>]" style="width:100px;" /></td>
            </tr>
            <?php endforeach; ?>
            <tr>
              <td></td><td></td>
              <td class="small-note">(10 char max)</td>
              <td class="small-note">(upto 2 decimal)</td>
              <td></td>
            </tr>
          </table>
        </td>
      </tr>

      
      <tr>
        <td class="section-label">COURSES<br/>APPLIED FOR</td>
        <td>
          BCA <input type="radio" name="course" value="BCA" />
          &nbsp; B.Com <input type="radio" name="course" value="B.Com" />
          &nbsp; B.Sc <input type="radio" name="course" value="B.Sc" />
          &nbsp; B.A <input type="radio" name="course" value="B.A" />
        </td>
      </tr>
    </table>

    <div class="btn-row">
      <input type="submit" value="Submit" />
      <input type="reset" value="Reset" />
    </div>
  </form>

</body>
</html>
