<section class="decoration decoration--bottom-dark pb-10 min-h-screen form form--bg md:py-20" >
    <div class="e-container flex flex-col items-center">
        <!-- <div>
            <h1 class="e-h1 text-white mt-10 text-3xl md:text-4xl lg:mt-64 ">Have Fun, Be Active, Ride. your. bike.</h1>
        </div> -->

        <div class=" rounded pb-20 form form--bg-color w-full mt-10 e-container lg:mt-16">
            <h1 class="e-h1 text-2xl text-center text-white md:text-left md:text-3xl lg:text-5xl form form--title">order enquiry</h1>
            
            <form id="enquire" action="">
                <div class=" md:flex md:flex-wrap ">
                    <div class="mt-5 w-full md:w-1/2">
                        <h3 class="items md:text-xl">Full name</h3>

                        <input class="form form--input w-full md:w-64 lg:w-9/12" type="text" name="firstname">
                    </div>

                    <div class="mt-5 w-full md:w-1/2">
                        <h3 class="items md:text-xl">Email Address</h3>

                        <input type="email" class="form form--input w-full md:w-64 lg:w-9/12" name="email">
                    </div>

                    <div class="mt-5 w-full md:w-1/2">
                        <h3 class="items md:text-xl">Contact Number</h3>

                        <input class="form form--input w-full md:w-64 lg:w-9/12" type="text" name="number" min="11" max="11">
                    </div>

                    <div class="mt-5 text-white lg:ml-0 lg:mt-8">
                        <h3 class="items md:text-xl">Gender</h3>

                        <input class=" p-2" type="radio" name="gender" value="male" checked> Male

                        <input class="ml-5 p-2" type="radio" name="gender" value="female"> Female

                        <input class="ml-5 p-2" type="radio" name="gender" value="other"> Other
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-white text-xl md:text-2xl">Your Previous Size</h2>

                    <div class="flex flex-row flex-wrap md:flex-no-wrap md:flex-grow md:flex-auto md:justify-around">
                        <button class="p-4 md:p-5 mt-5 form form--radio mr-1 flex-1 flex flex-col items-center md:w-1/4 ">
                             <div class="h-20 flex items-center ">
                                <icon class-list="w-10 h-10 text-white" name="bike"></icon>
                            </div>

                            <h4 class="md:text-lg">Small</h4>
                        </button>

                        <button class="p-4 md:p-5 mt-5 form form--radio  ml-1 flex-1  flex flex-col items-center md:ml-5 md:w-1/4">
                            <div class="h-20 flex items-center ">
                                <icon class-list="w-12 h-12 text-white" name="bike"></icon>
                            </div>

                            <h4 class="md:text-lg">Medium</h4>
                        </button>

                        <button class="p-4 md:p-5 mt-5 form form--radio mr-1 flex-1 flex flex-col items-center md:ml-5 md:w-1/4">
                            <div class="h-20 flex items-center ">
                                <icon class-list="w-16 h-16 text-white" name="bike"></icon>
                            </div>

                            <h4 class="md:text-lg">Large</h4>
                        </button>

                        <button class="p-4 md:p-5 mt-5 form form--radio  ml-1 flex-1 flex flex-col items-center md:ml-5 md:w-1/4">
                            <div class="h-20 flex items-center ">
                                <icon class-list="w-20 h-20 text-white" name="bike"></icon>
                            </div>

                            <h4 class="md:text-lg">Extra Large</h4>
                        </button>
                    </div>
                </div>

                <div class="e-container mt-10 form form--sub-bg-color py-5">
                    <div class="">
                        <h2 class="text-white text-xl md:text-2xl">Would you like us to suggest a size?</h2>

                        <button class="">yes</button>
                    </div>

                    <div class="mt-5">
                        <h2 class="text-white text-xl md:text-xl">Your Measurements</h2>
                            <div class="md:flex md:justify-center">
                                <div class=" md:flex-auto md:mt-5">
                                    <h3 class="items md:text-xl">Height</h3>

                                    <select class="form form--dropdown w-2/3" name="height">
                                        <option value="height">5'10</option>
                                    </select>
                                </div>

                                <div class="mt-5 md:flex-auto">
                                    <h3 class="items md:text-xl">Inside Leg Length</h3>

                                    <select class="form form--dropdown w-2/3" name="leg">
                                        <option value="ages">1900mm</option>
                                    </select>
                                </div>

                                <div class="mt-5 md:flex-auto">
                                    <h3 class="items md:text-xl">Reach/Arm Length</h3>

                                    <select class="form form--dropdown w-2/3" name="arm">
                                        <option value="arm">900mm</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div> 
                <!-- <div>
                    <div class="mt-10">
                        <div class="md:flex md:justify-around">
                            <div class="flex justify-between pt-5 md:w-1/3 max-h-24">
                                 <h2 class="text-white text-xl md:text-2xl">What Discipline?</h2>

                                 <div>
                                    <button class="form form--radio  flex-auto max-h-6 p-5 md:p-0">
                                        <icon class-list="w-10 h-10 text-white" name="bike"></icon>
                                        
                                        <p class="e-h5">Road</p>
                                    </button>

                                    <button class="form form--radio  flex-auto ml-2 max-h-6 min-w-6 p-5 md:p-0">
                                        <icon class-list="w-10 h-10 text-white" name="bike"></icon>

                                        <p class="e-h5">Mountain</p>
                                    </button>
                                 </div>
                            </div>
                            
                            <div class="w-full mb-20 mt-10 md:w-1/3 justify-start">
                                <h2 class="text-xl text-white mb-5 md:text-2xl">Budget</h2>

                                <input type="range" min="500" max="9000" value="3500" class="slider" id="myRange">
                            </div>
                        </div>
                    </div>
                </div>  -->

                <div class="flex flex-col mt-10 lg:flex-row lg:justify-between lg:pt-10">
                    <div>
                        <h2 class="text-xl text-white mb-5 md:text-2xl">What Discipline?</h2>

                        <div class="flex items-between">
                            <button class="form form--radio mr-5 flex-auto max-h-6 p-5 md:p-0">
                                <icon class-list="w-10 h-10 text-white" name="bike"></icon>
                                        
                                <p class="e-h5 lg:text-xl lowercase">Road</p>
                            </button>

                            <button class="form form--radio  flex-auto max-h-6 p-5 md:p-0">
                                <icon class-list="w-10 h-10 text-white" name="bike"></icon>
                                        
                                <p class="e-h5 lg:text-xl lowercase">Mountain</p>
                            </button>
                        </div>
                    </div>

                    <div class=" mt-5  lg:mt-0 lg:w-2/3">
                        <h2 class="text-xl text-white mb-5 md:text-2xl">Max Budget</h2>

                        <input type="range" min="500" max="8000" value="3500" class="slider" id="myRange">

                        <!-- <span class=""><h4 class="text-white inline">£500</h4></span>
                        <span class=""><h4 class="text-white inline">£9000</h4></span> -->
                    </div>
                </div>

                <div class="text-white submit px-5 py-2 mt-10 text-center rounded w-full lg:mt-20 mx-auto lg:mt-0">
                    <input class="text-center bg-transparent text-xl " type="submit" value="Enquire">
                </div>
            </form>
        </div>
    </div>
</section>
