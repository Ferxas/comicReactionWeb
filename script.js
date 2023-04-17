const startCameraButton = document.getElementById('start-camera');
const slideShowImage = docuemnt.getElementById('slideshow-image');


let stream;

startCameraButton.addEventListener('click', async () => {
  try {
    stream = await navigator.mediaDevices.getUserMedia({ video: true });
  } catch (error) {
    console.log(error);
  }
});

const FaceDetector = new window.FaceDetector();


setInterval(() => {
  if (!stream) return;

  const faces = awaitt FaceDetector.detect(slideshowImage);

  if(faces.length > 0) {

    const emotions = faces[0].expressions;

    if(emotions.happy > 0.8) {
      slideShowImage.src = 'imagen2.jpg';
    } else if(emotions.sad > 0.8) {
      slideShowImage.src = 'imagen3.jpg';
    } else {
      slideShowImage.src = 'imagen1.jpg';
    }
  }
}, 100);

