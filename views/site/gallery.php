
<!DOCTYPE html>

<html lang="en">
<head>
  <title>filterable gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/gallery.css" rel="stylesheet">
  
 </head>
<body>

<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="gallery-filter">
				<span class="filter-item active" data-filter="all">all</span>
				<span class="filter-item" data-filter="watch">men</span>
				<span class="filter-item" data-filter="headphone">women</span>
				<span class="filter-item" data-filter="camera">winners</span>
			</div>
		</div>
		<div class="row">
			<!-- gallery item start -->
			<div class="gallery-item shoe">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/-QvLveiaH3VI/YS_C1lXw6-I/AAAAAAAACa0/1hIbUlfQUQ8ew--PZ8IYB_55WFYTX8OtQCNcBGAsYHQ/s0/shoe-1.jpg" alt="shoe">
				</div>
			</div>
			
			<div class="gallery-item headphone">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/-T3KmNJ1-wYw/YS_E3rHDRII/AAAAAAAACb4/_DVj1_wL7eUZzJ45z9RQS5JG1orI_VlvACNcBGAsYHQ/s0/headphone-1.jpg" alt="headphone">
				</div>
			</div>
			
			<div class="gallery-item camera">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/-I4zq8AEp_jY/YS_C3MiTUqI/AAAAAAAACa8/GjRpPmI0eqE_g52nIv7gUrh_9AGQbQkoACNcBGAsYHQ/s0/camera-1.jpg" alt="camera">
				</div>
			</div>
			
			<div class="gallery-item headphone">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/-pEh6HYKdNtc/YS_DSTsTrVI/AAAAAAAACbk/ND95Y8qxhPUQlUE0N38GNUx207fkzTR2QCNcBGAsYHQ/s0/headphone-2.jpg" alt="headphone">
				</div>
			</div>
			
			<div class="gallery-item camera">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/--7JZU9HynIU/YS_DH53WPiI/AAAAAAAACbY/ivcZm6OVbTgSfc9JWX1OE4WwKmvhcY07wCNcBGAsYHQ/s0/camera-2.jpg" alt="camera">
				</div>
			</div>
			
      			<div class="gallery-item phone">
      				<div class="gallery-item-inner">
      					<img src="https://1.bp.blogspot.com/-wX4lusii0OE/YS_DC2BpADI/AAAAAAAACbA/tTGcB7QUQnshvW8hbEtf1-Nnj6dl3wSzgCNcBGAsYHQ/s0/phone-1.jpg" alt="phone">
      				</div>
      			</div>

			<div class="gallery-item camera">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/-12xO4l2QXGM/YS_DDwhwSYI/AAAAAAAACbI/OyLyIX89tnwmpwxcYoVED-x8uRWq56TawCNcBGAsYHQ/s0/camera-3.jpg" alt="camera">
				</div>
			</div>

			<div class="gallery-item watch">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/-rAOuebpUc6E/YS_C1gP9q2I/AAAAAAAACa4/emX-5ZEz-MUeUr11_iaj_BkEYbs-FH8kQCNcBGAsYHQ/s0/watch-1.jpg" alt="watch">
				</div>
			</div>

			
			<div class="gallery-item watch">
				<div class="gallery-item-inner">
					<img src="https://1.bp.blogspot.com/-sBZvlxLrXL8/YS_DDZdTaJI/AAAAAAAACbE/RKImX4fKJIs7NJV_SAj1bIGYjx1-acB8wCNcBGAsYHQ/s0/watch-2.jpg" alt="watch">
				</div>
			</div>
			
		</div>
	</div>
</section>

<script>

 const filterContainer = document.querySelector(".gallery-filter"),
const galleryItems = document.querySelectorAll(".gallery-item");

 filterContainer.addEventListener("click", (event) =>{
   if(event.target.classList.contains("filter-item")){
   	 // deactivate existing active 'filter-item'
   	 filterContainer.querySelector(".active").classList.remove("active");
   	 // activate new 'filter-item'
   	 event.target.classList.add("active");
   	 const filterValue = event.target.getAttribute("data-filter");
   	 galleryItems.forEach((item) =>{
       if(item.classList.contains(filterValue) || filterValue === 'all'){
       	item.classList.remove("hide");
       	 item.classList.add("show");
       }
       else{
       	item.classList.remove("show");
       	item.classList.add("hide");
       }
   	 });
   }
 });
</script>
</body>
</html>
