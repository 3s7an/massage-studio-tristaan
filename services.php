<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2 class="text-center" id="services">Check our service offer and price list</h2>
        <button type="button" class="btn btn-outline-success" id="polhodka">30 minutes</button> <button type="button" class="btn btn-outline-success" id="hodka">60 minutes</button>
        <div class="accordion" id="accordionExample">
        
        <div class="accordion-item mt-5">
          <h3 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <p>Swedish Massage -> <span class="swedish">30</span><i class="fa-solid fa-euro-sign" id="services-euro-icon"></i></p>
            </button>
          </h3>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p id="services-description">
                    A typical Swedish massage session begins with the client lying on a massage table, draped with a sheet or towel for modesty. The therapist applies massage oil or lotion to the skin and starts with broad, effleurage strokes to warm up the muscles. They then proceed to work on specific areas of tension with techniques like petrissage (kneading), tapotement (rhythmic tapping), friction (rubbing), and sometimes vibration..
                   </p>
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <p>Trigger point Massage -> <span class="trigger">32</span><i class="fa-solid fa-euro-sign" id="services-euro-icon"></i></p>
            </button>
          </h3>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p id="services-description">
                <i>Trigger point massage</i> is a technique used to alleviate muscle pain and dysfunction caused by trigger points. Trigger points are localized areas of muscle tightness or "knots" that can cause pain, restricted movement, and referred pain in other parts of the body.
                
            </div>
          </div>
        </div>
        <div class="col">
        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <p>Thai massage -> <span class="thai">38</span><i class="fa-solid fa-euro-sign" id="services-euro-icon"></i></p>
            </button>
          </h3>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p id="services-description">
                    During a Thai massage session, the recipient typically lies on a padded mat on the floor while the practitioner uses their hands, elbows, knees, and feet to apply pressure along energy lines and specific points of the body. The session involves a series of rhythmic compressions, stretches, and passive joint movements, aiming to improve flexibility, relieve muscle tension, and balance the body's energy systems
                </p>
            </div>
          </div>
        </div>
       
        <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                <p>Hot Stone Massage -> <span class="hot">28</span><i class="fa-solid fa-euro-sign" id="services-euro-icon"></i></p>
              </button>
            </h3>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <p id="services-description">
                During a hot stone massage session, smooth, flat stones, typically made of basalt, a type of volcanic rock known for its heat retention properties, are heated in water to a specific temperature. The stones are then placed strategically on the body, often along the spine, on the palms of the hands, or between the toes, to help relax muscles and improve energy flow.
                </p> 
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
               <p>Lymphatic drainage Massage -> <span class="lymphatic">45</span><i class="fa-solid fa-euro-sign" id="services-euro-icon"></i></p> 
              </button>
            </h3>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <p id="services-description">
                During a lymphatic drainage massage session, the therapist uses gentle, rhythmic strokes and light pressure to stimulate the lymphatic vessels and encourage the movement of lymph fluid. The massage strokes typically follow the pathways of the lymphatic system, focusing on areas where lymph nodes are located, such as the neck, armpits, and groin.
                </p>
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                <p>Cupping -> <span class="cupping">30</span><i class="fa-solid fa-euro-sign" id="services-euro-icon"></i></p>
                
              </button>
            </h3>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <p id="services-description">
                    <i>Cupping</i> is a therapeutic technique that involves placing cups on the skin to create suction. It's an ancient practice that has been used for thousands of years in various cultures, including traditional Chinese medicine, Egyptian medicine, and Middle Eastern folk medicine.
                    <br>
                    There are different methods of cupping, but the most common ones involve using glass, silicone, or plastic cups. The cups are typically heated or a vacuum pump is used to create suction, and then they are placed on specific areas of the body.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>

                



        
      
    
  
    
</body>
</html>