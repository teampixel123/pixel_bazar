<style>
<?php foreach ($portfolio_data as $portfolio_data2) {
  $type = $portfolio_data2->type;
  if($portfolio_data2->type == 'web'){
    echo '
    #port_img_'.$portfolio_data2->id.'{
      background-size: contain;
      background-repeat:no-repeat;
      height:513px;
    }
    @media screen and (max-width: 479px) {
      #port_img_'.$portfolio_data2->id.'{
        height:428px !important;
      }
    }
    ';
  }
  else{
   echo '
   #port_img_'.$portfolio_data2->id.'{
     background-size: contain;
     background-repeat:no-repeat;
     height:243px;
   }
   @media screen and (max-width: 479px) {
     #port_img_'.$portfolio_data2->id.'{
       height:203px !important;
     }
   }';
}
?>
<?php } ?>
<?php echo ''; ?>
</style>
