<div id="main-content-wrapper" class="page-content ga-co clearfix" style="background-color:#f1f4f5;display:none;">
<div class="breadcrumbs1_wrapper">
    
</div>

<ul class="blocksa blocks-100 blocks-xlg-4 blocks-md-3 blocks-sm-2" data-plugin="masonry">
<style>
.thumbnail
{
	margin-bottom:0px;
}
</style>
<?php 
	$gallery = $this->db->get_where('tbl_album',array('id'=>$id))->result();
	foreach($gallery as $row)
	{
		$pic = explode(',',$row->photos);
		foreach($pic as $rpic)
		{
			if($rpic != "")
			{
			?>
			<li class="masonry-item">
				<div class="widget widget-article widget-shadow">
					<a href="<?php echo base_url().'upload/albums/'.$rpic ;?>" class="thumbnail widget-header cover" title="">
						<img class="cover-image" src="<?php echo base_url().'upload/albums/'.$rpic ;?>" alt="">
					</a>
				</div>
			</li>

			
			<?php
			}
		}
	}
?>
		
</ul>



</div>