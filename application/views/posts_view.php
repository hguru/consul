
<!DOCTYPE html>
<html lang=“en”>
  <head>
  </head>
  <body>
  
    <h4>Display Records From Database Using Codeigniter</h4>
    <table>
     <tr>
      <td><strong>Post Id</strong></td>
      <td><strong>Post Title</strong></td>
    </tr>
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->post_id;?></td>
         <td><?php echo $post->post_title;?></td>
      </tr>    
     <?php }?>  
   </table>
  </body>
</html>
