<div class="flex flex-col items-center w-full">
    <div class="grid w-full grid-cols-1 p-4 px-6 lg:grid-cols-5" style=" background-image: url('/images/TopSearchBanner.jpg');background-repeat: no-repeat; background-position:center; background-size: cover;">
        <ul class="col-span-5" style="color: #1F2833; border-bottom: solid #1F2833;">
            <li class="hidden md:inline">
                <div class="flex flex-row justify-between">
                    <a href="/" class="text-3xl font-bold">Iceland Camper Rentals</a>
                    <div class="mr-6 space-x-6">
                        <a href="/#types" class="text-xl font-bold">Types</a>
                        <a href="/#extras" class="text-xl font-bold">Extras</a>
                        <a href="/#reviews" class="text-xl font-bold">Reviews</a>
                        <a href="/#iceland" class="text-xl font-bold">Iceland</a>
                        <a href="/#included" class="text-xl font-bold">Included</a>
                        <a href="/#contact" class="text-xl font-bold">Contact us</a>
                    </div>
                </div>
            </li>
            <li class="inline md:hidden">
                <div class="flex flex-row justify-between">
                    <a href="/" class="text-3xl font-bold">Iceland Camper Rentals</a>
                    <div x-data="{open: false}">
                        <i class="text-3xl font-bold cursor-pointer fa fa-bars" x-on:click="open = !open"></i>
                        <div x-show="open" class="absolute z-20 flex flex-col bg-white rounded-lg shadow-lg right-6" >
                            <a href="/#types" class="p-4 text-xl font-bold rounded-t-lg hover:bg-gray-200" x-on:click="open = !open">Types</a>
                            <a href="/#extras" class="p-4 text-xl font-bold rounded-t-lg hover:bg-gray-200" x-on:click="open = !open">Extras</a>
                            <a href="/#reviews" class="p-4 text-xl font-bold rounded-t-lg hover:bg-gray-200" x-on:click="open = !open">Reviews</a>
                            <a href="/#iceland" class="p-4 text-xl font-bold rounded-t-lg hover:bg-gray-200" x-on:click="open = !open">Iceland</a>
                            <a href="/#contact" class="p-4 text-xl font-bold rounded-t-lg hover:bg-gray-200" x-on:click="open = !open">Contact us</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="col-span-1 lg:col-start-2 lg:col-span-2 2xl:col-span-1 2xl:col-start-2" >
            <x-datePicker titleColor="black" labelColor="#1F2833"/>
        </div>
    </div>
</div>
