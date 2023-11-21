<div class="row mb ">
    <div class="boxtrai mr mb10" id="slideshow">
                <div class="row ">
                    <img id="slide" style="width:100%; border-radius: 5px;" src="view/img/bn0.jpg" alt="Slide">
                </div>
                <div class="row">
                    <!-- <?php 
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo'<div class="boxsp '.$mr.' ">
                            <div class="row img">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            </div>
                                <p style=" text-align: center;font-size:1.0vw" > $'.$price_product.'</p>
                                <a style=" text-align: center; font-size:1.1vw; margin-left: 20px;" href="'.$linksp.'">'.$name_product.'</a>
                            </div>';
                            $i=$i+1;
                        }                   
                    ?>    -->
                </div>     
            </div>
    <div class="boxphai">
         <?php include "boxright.php" ?>

    </div>
        </div>
    <!-- </div> -->
        <script>
            var slideshow = document.getElementById('slideshow');
            var slide = document.getElementById('slide');
            var images = [
                'view/img/bn0.jpg',
                'view/img/bn1.jpg',
                'view/img/bn2.jpg'
            ];
                            
            var currentImage = 0;
            function nextImage() {
                slide.style.left = '100%';
                slide.src = images[currentImage];
            setTimeout(function () {
                slide.style.left = '0';
            }, 0);
            currentImage = (currentImage + 1) % images.length;
            }
            nextImage(); // Hiển thị ảnh đầu tiên ngay khi trang được tải
            setInterval(nextImage, 1900); // Tự động chuyển ảnh sang ảnh khác sau mỗi 3 giây    
        </script>