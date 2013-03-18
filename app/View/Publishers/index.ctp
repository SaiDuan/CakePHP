<h1>Publishers</h1> 
<table> 
       <tr> 
    <th>ID</th> 
     <th>Company Name</th> 
     <th>Contact</th> 
     <th>Address</th> 
  </tr>     
  <!-- here is where we loop through our $publishers array --> 
  <?php foreach($publishers as $publisher)  
  { 
  ?> 
    <tr> 
       <td><?php echo $publisher['Publisher']['id']; ?></td> 
       <td><?php echo $publisher['Publisher']['company_name']; ?></td> 
        <td><?php echo $publisher['Publisher']['contact_fname']."  
        ".$publisher['Publisher']['contact_sname']?> 
      </td> 
      <td> 
          <?php echo $publisher['Publisher']['pub_street']; ?><br /> 
          <?php echo $publisher['Publisher']['pub_suburb']; ?> 
          <?php echo $publisher['Publisher']['pub_state']; ?><br /> 
          <?php echo $publisher['Publisher']['pub_pc']; ?><br />    
       </td> 
       <td> 
    </tr> 
  <?php  
  }  
  ?> 
</table> 

