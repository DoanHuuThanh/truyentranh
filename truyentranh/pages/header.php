<div class="header">
              <div class="next">
                <i class="fa-solid fa-chevron-right"></i>
              </div>
              <div class="prev">
                <i class="fa-solid fa-angle-left"></i>
              </div>
            
              
              <div class="tabs">
              
                <div class="tab-item active">
                    <img src="./anh1.jpg">   
                </div>

              <div class="tab-item ">
                <img src="./anh2.jpg">
            </div>

              <div class="tab-item ">
                <img src="./anh3.jpg"> 
              </div>
        
            </div>
          
        
</div>

<script>
      // Get the tab items and next/prev buttons
      const tabItems = document.querySelectorAll(".tab-item");
      const nextBtn = document.querySelector(".next");
      const prevBtn = document.querySelector(".prev");
    
      let currentIndex = 0;
      let timer;
    
      // Function to show the current image
      function showImage(index) {
        // Hide all tab items
        tabItems.forEach((item) => {
          item.style.display = "none";
        });
    
        // Show the tab item at the specified index
        tabItems[index].style.display = "block";
      }
    
      // Function to go to the next image
      function nextImage() {
        currentIndex++;
        if (currentIndex >= tabItems.length) {
          currentIndex = 0;
        }
        showImage(currentIndex);
      }
    
      // Function to go to the previous image
      function prevImage() {
        currentIndex--;
        if (currentIndex < 0) {
          currentIndex = tabItems.length - 1;
        }
        showImage(currentIndex);
      }
    
      // Event listener for the next button
      nextBtn.addEventListener("click", () => {
        nextImage();
        resetTimer();
      });
    
      // Event listener for the previous button
      prevBtn.addEventListener("click", () => {
        prevImage();
        resetTimer();
      });
    
      // Function to reset the timer for automatic image change
      function resetTimer() {
        clearInterval(timer);
        timer = setInterval(nextImage, 2000);
      }
    
      // Start the initial timer
      resetTimer();
    </script>