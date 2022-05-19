<div class="flex flex-col items-center justify-center pb-10 mb-4 bg-gray-200">

  <div
    class="relative md:max-w-4xl"
    x-data="carousel()"
    x-init="init()"
   >
    <!-- Slides -->
      <div
         x-show="getActive() === 1"
         class="flex items-center px-6 py-24 text-black bg-teal-500 rounded-lg md:px-24 lg:h-64 h-1/2">
        <div class="relative px-4 pt-5 pb-12 overflow-hidden bg-white rounded-lg shadow sm:pt-6 sm:px-6">
            <dd class="flex items-baseline pb-6 sm:pb-7">
                <p>
                    We had a great experience with this company. It was easy and as advertised. They have affordable pricing and good insurance included.
                </p>
                <div class="absolute inset-x-0 bottom-0 px-4 py-2 sm:px-6">
                    <div class="bottom-0 flex flex-row gap-x-2">
                        <p class="font-semibold">
                            Sarah
                        </p>
                        <p>
                            from U.S.A
                        </p>
                        <span class="left-0 w-1/5 border border-white shadow-lg" style="height:30px; width:30px; border-radius:50%; display:block; background-image: url('/flags/4x3/us.svg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                        </span>
                    </div>
                </div>
            </dd>
        </div>
      </div>

      <div
         x-show="getActive() === 2"
         class="flex items-center px-6 py-24 text-black bg-teal-500 rounded-lg md:px-24 lg:h-64 h-1/2">
        <div class="relative px-4 pt-5 pb-12 overflow-hidden bg-white rounded-lg shadow sm:pt-6 sm:px-6">
            <dd class="flex items-baseline pb-6 sm:pb-7">
                <p>
                    It was an amazing experience with northbound nordic car rental campers! I am living in Iceland and I always wanted to rent a camper, and this car for two person was enough for 10 days, you can do it with campers bigger than Dacia but the Dacia dokker was amazing too. I recommend and I will do it again!
                </p>
                <div class="absolute inset-x-0 bottom-0 px-4 py-2 sm:px-6">
                    <div class="bottom-0 flex flex-row gap-x-2">
                        <p class="font-semibold">
                            Suarez
                        </p>
                        <p>
                            from Spain
                        </p>
                        <span class="left-0 w-1/5 border border-white shadow-lg" style="height:30px; width:30px; border-radius:50%; display:block; background-image: url('/flags/4x3/es.svg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                        </span>
                    </div>
                </div>
            </dd>
        </div>
      </div>

      <div
         x-show="getActive() === 3"
         class="flex items-center px-6 py-24 text-black bg-teal-500 rounded-lg md:px-24 lg:h-64 h-1/2">
        <div class="relative px-4 pt-5 pb-12 overflow-hidden bg-white rounded-lg shadow sm:pt-6 sm:px-6">
            <dd class="flex items-baseline pb-6 sm:pb-7">
                <p>
                    We had a wonderful week with our Caddy Camper EX! A great car, top service, super nice guys from AC, and an unbeatable price-performance ratio! Highly recommended and our first choice on our next trip to Iceland! Keep it up and thank you!
                </p>
                <div class="absolute inset-x-0 bottom-0 px-4 py-2 sm:px-6">
                    <div class="bottom-0 flex flex-row gap-x-2">
                        <p class="font-semibold">
                            Torsten
                        </p>
                        <p>
                            from Germany
                        </p>
                        <span class="left-0 w-1/5 border border-white shadow-lg" style="height:30px; width:30px; border-radius:50%; display:block; background-image: url('/flags/4x3/de.svg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                        </span>
                    </div>
                </div>
            </dd>
        </div>
      </div>

      <div
         x-show="activeSlide === 4"
         class="flex items-center px-6 py-24 text-black bg-teal-500 rounded-lg md:px-24 lg:h-64 h-1/2">
        <div class="relative px-4 pt-5 pb-12 overflow-hidden bg-white rounded-lg shadow sm:pt-6 sm:px-6">
            <dd class="flex items-baseline pb-6 sm:pb-7">
                <p>
                    I really suggest this company for icelandic rental. The customer service is really efficient, if you have any kind of issue you can contact them every moment and they answer soon taking care of you in the best way. Excellent service! Everything about the car was perfect and good prices!
                </p>
                <div class="absolute inset-x-0 bottom-0 px-4 py-2 sm:px-6">
                    <div class="bottom-0 flex flex-row gap-x-2">
                        <p class="font-semibold">
                            Edoardo
                        </p>
                        <p>
                            from Spain
                        </p>
                        <span class="left-0 w-1/5 border border-white shadow-lg" style="height:30px; width:30px; border-radius:50%; display:block; background-image: url('/flags/4x3/es.svg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                        </span>
                    </div>
                </div>
            </dd>
        </div>
      </div>

    <!-- Prev/Next Arrows -->
    <div class="absolute inset-0 flex text-3xl font-bold">
      <div class="flex items-center justify-start w-1/2">
        <button
          class="w-12 h-12 font-bold text-white bg-teal-100 rounded-full hover:shadow-lg"
          x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
          &#8592;
         </button>
      </div>
      <div class="flex items-center justify-end w-1/2">
        <button
          class="w-12 h-12 font-bold text-white bg-teal-100 rounded-full hover:shadow"
          x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
          &#8594;
        </button>
      </div>
    </div>

    <!-- Buttons -->
    <div class="absolute flex items-center justify-center w-full px-4 mb-10 ">
      <template x-for="slide in slides" :key="slide">
        <button
          class="flex-1 w-4 h-2 mx-2 transition-colors duration-200 ease-out rounded-full mt-4overflow-hidden hover:bg-white hover:shadow-lg"
          :class="{
              'bg-white': activeSlide === slide,
              'bg-gray-400': activeSlide !== slide
          }"
          x-on:click="activeSlide = slide"
        ></button>
      </template>
    </div>
  </div>
  </div>
</div>


<script>
    function carousel() {
        return {
            activeSlide: 1,
            slides: [1, 2, 3, 4],
            time: new Date(),
            init() {
              setInterval(() => {
                  console.log(this.activeSlide);
                  if(this.activeSlide == 4)
                  {
                      this.activeSlide = 1
                  }
                  else
                  {
                      this.activeSlide++;
                  }
              }, 10000);
            },
            getActive() {
                return this.activeSlide;
            },
        }
    }

</script>
