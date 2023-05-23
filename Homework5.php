<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>

  <h2>놀이공원 티켓 계산기</h2>
 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <label for="name"> 성함:</label>
  <input type="text" id="name" name="name" required><br>
  
  <table style="width:100%">
    <tr>
      <th>No</th>
      <th>구분</th>
      <th colspan="2">어린이</th>
      <th colspan="2">어른</th>
      <th>비고</th>
    </tr>
    <tr>
      <td>1</td>
      <td>입장권</td>
      <td>7000</td>
      <td>
        <input type="number" id="ticket-child-nor" name="ticket-child-nor" min="0" value="0">
      </td>
      <td>10000</td>
      <td>
        <input type="number" id="ticket-adult-nor" name="ticket-adult-nor" min="0" value="0">
      </td>
      <td>입장</td>
    </tr>
    <tr>
    <td>2</td>
      <td>BIG3</td>
      <td>12000</td>
      <td>
        <input type="number" id="ticket-child-BIG3" name="ticket-child-BIG3" min="0" value="0">
      </td>
      <td>16000</td>
      <td>
        <input type="number" id="ticket-adult-BIG3" name="ticket-adult-BIG3" min="0" value="0">
      </td>
      <td>입장+놀이3종</td>
    </tr>
    <tr>
    <td>3</td>
      <td>자유이용권</td>
      <td>21000</td>
      <td>
        <input type="number" id="ticket-child-free" name="ticket-child-free" min="0" value="0">
      </td>
      <td>26000</td>
      <td>
        <input type="number" id="ticket-adult-free" name="ticket-adult-free" min="0" value="0">
      </td>
      <td>입장+놀이자유</td>
    </tr>
    <tr>
    <td>4</td>
      <td>연간이용권</td>
      <td>70000</td>
      <td>
        <input type="number" id="ticket-child-year" name="ticket-child-year" min="0" value="0">
      </td>
      <td>90000</td>
      <td>
        <input type="number" id="ticket-adult-year" name="ticket-adult-year" min="0" value="0">
      </td>
      <td>입장+놀이자유</td>
    </tr>
    <tr>
      <td colspan="7">
        <input type="submit" value="합계">
      </td>
    </tr>
  </table>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $ticketChild_nor = $_POST["ticket-child-nor"];
    $ticketAdult_nor = $_POST["ticket-adult-nor"];
    $ticketChild_BIG3 = $_POST["ticket-child-BIG3"];
    $ticketAdult_BIG3 = $_POST["ticket-adult-BIG3"];
    $ticketChild_free = $_POST["ticket-child-free"];
    $ticketAdult_free = $_POST["ticket-adult-free"];
    $ticketChild_year = $_POST["ticket-child-year"];
    $ticketAdult_year = $_POST["ticket-adult-year"];
    $ticketChild_nor_Price = 7000;
    $ticketAdult_nor_Price = 10000;
    $ticketChild_BIG3_Price = 12000;
    $ticketAdult_BIG3_Price = 16000;
    $ticketChild_free_Price = 21000;
    $ticketAdult_free_Price = 26000;
    $ticketChild_year_Price = 70000;
    $ticketAdult_year_Price = 90000;
    
    $totalPrice = $ticketChild_nor * $ticketChild_nor_Price + $ticketAdult_nor * $ticketAdult_nor_Price + $ticketChild_BIG3 * $ticketChild_BIG3_Price + $ticketAdult_BIG3 * $ticketAdult_BIG3_Price + $ticketChild_free * $ticketChild_free_Price + $ticketAdult_free * $ticketAdult_free_Price + $ticketChild_year * $ticketChild_year_Price + $ticketAdult_year * $ticketAdult_year_Price;
    
    echo "<h3>결제 정보</h3>";
    $currentTime = date("Y년 m월 d일 H:i분");
    echo $currentTime . "<br>";
    echo $name . " 고객님 감사합니다.<br>";
    echo "<p>어린이 입장권 $ticketChild_nor 매</p>";
    echo "<p>성인 입장권 $ticketAdult_nor 매</p>";
    echo "<p>어린이 BIG3 $ticketChild_BIG3 매</p>";
    echo "<p>성인 BIG3 $ticketAdult_BIG3 매</p>";
    echo "<p>어린이 자유이용권 $ticketChild_free 매</p>";
    echo "<p>성인 자유이용권 $ticketAdult_free 매</p>";
    echo "<p>어린이 연간이용권 $ticketChild_year 매</p>";
    echo "<p>성인 연간이용권 $ticketAdult_year 매</p>";
    echo "<p>합계 $totalPrice 원 입니다.</p>";
  }
  ?>

</body>
</html>
