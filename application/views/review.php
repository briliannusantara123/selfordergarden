<?php $this->load->view('template/headmenu') ?>
<?php   $previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
} ?>
<div class="head">
        <header>
            <div style="display: flex; align-items: center;">
                <a href="<?= base_url() ?>index.php/selforder/home/<?= $nomeja ?>" style="text-decoration: none; color: black;">
                    <i class="bi bi-arrow-left" style="font-size: 30px;margin-left: 10px; text-shadow: 1px 1px 2px black;"></i>
                </a>
                <h2 style="margin: 0; margin-left: 5px;"><strong>Feedback and Suggestions</strong></h2>
            </div>
        </header>
    </div>
<form action="<?= base_url() ?>index.php/review/save/<?= $nomeja;?>" method="post">
  <div style="padding-left: 10px; padding-right:15px;margin-top: 60px;">
    <table width="100%" border="0">
    <?php foreach($category as $cat){ ?>
      <tr>
        <td width="100%" colspan="2" align="left"><b><h4><?php echo $cat->description?></h4></b></td>
      </tr>
      <tr>
        <td width="50%">
          <input type="hidden" id="cat_id_<?php echo $cat->id;?>" name="cat_id[]" value="<?php echo $cat->id;?>">
          <input type="hidden" id="desc_<?php echo $cat->id;?>" name="desc[]" value="<?php echo $cat->description;?>">
          <textarea class="form-control" id="kritik_<?php echo $cat->id;?>" name="kritik[]" rows="3" placeholder="Submit Feedback and Suggestions."></textarea>
        </td>
        <td width="50%">
          <textarea class="form-control" id="pujian_<?php echo $cat->id;?>" name="pujian[]" rows="3" placeholder="Submit Praise"></textarea>
        </td>
      </tr>
      <tr><td>&nbsp;</td></tr>
    <?php }?>
    </table>
  </div>
  <footer>
            <div class="containerfooter" style="padding: 10px;">
                <button type="submit" class="btn btn-success add-btn" style="padding: 15px;font-size: 17px;"><strong>Send</strong></button>
            </div>
        </footer>

<?php $this->load->view('template/footer') ?>