
      // Get the img object using its Id
      var enlarged = false;
      // Function to increase image size
      function enlargeImg(imgId) {
        img = document.getElementById(imgId);

        if (img.style.transform == "scale(3)")  {enlarged = true;}
        else{enlarged = false;}

        if (enlarged) {
            img.style.transform ="scale(1)";
            img.style.zIndex = "0";
        }
        else
        {
        // Set image size to 1.5 times original
        img.style.transform ="scale(3)";
        img.style.zIndex = "50";
        img.style.position = "relative";
        // Animation effect 
        img.style.transition = "transform 0.25s ease";
        console.log("click");
        }
    }

