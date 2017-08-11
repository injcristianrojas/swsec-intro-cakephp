<table class="tg" border="1">
  <tr>
    <th>Message List</th>
  </tr>
  <?php foreach ($messages as $message): ?>
    <tr>
      <td><?php echo $message['Message']['message']; ?></td>
    </tr>
  <?php endforeach;?>
</table>
<form action="/messages" method="post">
  <p>
    Enter new message: <input type="text" name="text"> <input type="submit" value="Go">
  </p>
</form>
