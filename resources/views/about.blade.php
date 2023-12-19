<title>Nadzorna Plošča | FITMENTOR</title>
<x-app-layout>
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=05a16224-4c34-4db8-a343-d130a788414c"> </script>
                <main class="">
                    <h1 class="mt-8 text-5xl font-semibold text-gray-900" style="text-align: center ">
                        OGLASNA DESKA
                    </h1>
                    <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">© 2024 | Fitmentor.si</p>
                    <br>
                    <hr />
                    <div class="min-h-screen bg-gray-100 py-5">
                        <div class="overflow-x-auto w-full">
                            <div class="flex bg-blue-100 rounded-lg p-4 mb-4 text-sm text-blue-700 w-80" role="alert" style="margin:0 auto; text-align:center">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <div>
                                    <span class="font-medium">NOVO:</span> Vsi oglasi imajo rok trajanja 30 dni.
                                </div>
                            </div>
                            <br>
                            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700 w-80" role="alert" style="margin:0 auto; text-align:center">
                                <div>
                                    <span class="font-medium">Opozorilo!</span> Oglasi z neprimerno vsebino bodo odstranjeni in imetniki računa bodo sankcionirani.
                                </div>
                            </div>
                            <br>
                            <hr />
                            <br>

                            <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">Trenutno aktivne objave:</p>
                            <p class="text-gray-700 text-md" style="text-align:center;">Z klikom na "Briši" bo vaš vnos trajno odstranjen.</p>
                            <br>
                            <table class="max-w-30whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-x-auto">
                                <thead class="bg-gray-900">
                                    <tr class="text-white text-left">
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Naslov </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Vrsta treninga </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Status </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Opis </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Cena/1HR (€) </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- ENTRY POINT -->
                                    @foreach($services as $service)
                                    <tr>
                                        <td class="px-4 py-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="inline-flex w-24 h-24"> <img class="w-24 h-24 object-cover rounded-full" alt="e-Storitve" src="{{ asset('/storage/images/services/'. $service->image) }}" /> </div>
                                                <div>
                                                    <p> {{ $service->title }} ({{$service->user_id}}) </p>
                                                    <p class="text-gray-500 text-sm font-semibold tracking-wide"> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }} </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <p class=""> {{$service->type}} </p>
                                            <p class="text-gray-500 text-sm font-semibold tracking-wide"> {{ $service->url }} </p>
                                        </td>
                                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Aktiven </span> </td>
                                        <td class="px-6 py-4 text-center"> {{ $service->description}} </td>
                                        <td class="px-6 py-4 text-center"> {{ $service->price}} </td>
                                        <td class="px-6 py-4 text-center pt-8 text-red-800">
                                            <form method="POST" action="api/service/{{$service->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Briši</button>
                                        </form></td>

                                    </tr>
                                    @endforeach
                                    <!-- END POINT -->
                                </tbody>
                            </table>
                            <br>
                            <hr />
                            
                            <p class="text-gray-700 font-semibold text-lg pt-3" style="text-align:center;">Sprememba vsebine: </p>
                            <p class="text-gray-700 text-md" style="text-align:center;">Z klikom na "Shrani" bodo vaše spremembe uveljavljene.</p>
                            <br>
                            <table class="table-auto min-w-full mx-auto max-w-2xl whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-x-auto">
                                <thead class="bg-gray-900">
                                    <tr class="text-white">
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Objava</th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Povezava</th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Status</th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Opis</th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Cena (€)</th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                                    </tr>
                                </thead>
                                @foreach($services as $service)
                                <form method="POST" action="api/service/{{$service->id}}">
                                @csrf
                                @method('PUT')   
                                <tbody class="divide-y divide-gray-200">
                                    <!-- ENTRY POINT -->
                                    
                                    <tr>
                                        <td class="px-4 py-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="inline-flex w-24 h-24"> <img class="w-24 h-24 object-cover rounded-full" alt="e-Storitve" src="{{ asset('/storage/images/services/'. $service->image) }}" /> </div>
                                                <div>
                                                    <p class="text-gray-500 text-xs font-semibold tracking-wide">Naslov</p> <input class="border border-gray-300 rounded w-full text-xs leading-4 placeholder-gray-600 text-gray-600" type="text" name="title" id="" value="{{$service->title}}" required/> 
                                                    <br />
                                                    <p class="text-gray-500 text-xs font-semibold tracking-wide pt-2"> {{ $service->region }},(Kraj)<!-- {{ $service->municipality }},--></p>  <input class="border border-gray-300 rounded text-xs leading-4 placeholder-gray-600 text-gray-600" type="text" name="city" id="" value="{{$service->city}}" required/> 
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <p class="text-gray-500 text-sm font-semibold tracking-wide"> {{$service->type}} </p>
                                            <p class="text-gray-500 text-sm font-semibold tracking-wide"> <input class="border border-gray-300 p-4 rounded text-xs leading-4 placeholder-gray-600 text-gray-600" type="text" name="url" id="" value="{{$service->url}}" /> </p>
                                        </td>
                                        <td class="px-6 py-4 text-center"> <span class="text-white text-xs w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Aktiven </span> </td>
                                        <td class="px-6 py-4 text-center">
    
                                        <!--<input rows="5" cols="60" class="border border-gray-300 p-4 text-sm leading-4 placeholder-gray-600 text-gray-600 form-group col-md-12" type="text" name="description" id="input-field" style="height:150px;" value="{{$service->description}}" required></input>-->

                                        <textarea class="border border-gray-300 p-4 text-sm leading-4 placeholder-gray-600 text-gray-600" id="description" name="description" rows="5" cols="50" value="{{$service->description}}">{{$service->description}}</textarea>

                                       

                                        </td>
                                        <td class="px-6 py-4 text-center"> <input class="border border-gray-300 p-4 rounded text-xs leading-4 placeholder-gray-600 text-gray-600" type="number" name="price" id="" value="{{$service->price}}"/> </td>
                                        <td class="px-6 py-4 text-center pt-8 text-indigo-600">
                                            
                                            <button type="submit">Shrani</button>
                                        </form></td>

                                    </tr>
                                   
                                    <!-- END POINT -->
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <hr />
                            <br>
                            <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">Primer prikazane objave:</p>
                            <div class="mx-auto mt-5 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                                <img class="h-64 w-full object-cover object-center" src="https://cdn.discordapp.com/attachments/923643835073060886/1186203924521295983/fitnes_in_sport.png?ex=6592657e&is=657ff07e&hm=5724e7926575edac388c2297a0ce03edb84cdf07f27c04ba7307db02f9b5e643&" alt="fitmentor" />
                                <div class="p-4">
                                  <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-900">Vrsta treninga (Naslov)</h2>

                                  <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-900">> Regija,<!--,--> Kraj</h3>

                                  <p class="mb-2 text-semibold dark:text-gray-300 text-gray-700">Nudim kondicijske treninga za športnike... (Opis)</p>

                                  <p class="mb-2 text-base dark:text-gray-300 text-gray-700">040 400 400 (GSM)</p>

                                  <a href="https://fitmentor.si/"><p class="mb-2 text-blue-600">https://fitmentor.si/ (URL)</p></a>

                                  <div class="flex items-center">
                                    <p class="mr-2 text-lg text-gray-900 dark:text-white">
                                    16.00€ / Po dogovoru
                                    </p>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <footer class="bg-gray-800 text-black pt-4 pb-4">
              <div class="text-white" style="text-align: center;">
                  <p class="font-bold">&copy; 2024 FITMENTOR.SI - ŠPORTNO/MENTORSKO POSREDNIŠTVO</p>
                  <br />
                  <p>Izvajanje storitev ter transakcije so prepuščene posameznikom, spletni portal ni odgovoren za morebitne izgube ali težave pri izvajanju posredništva.</p>
              </div>
    </footer>

</x-app-layout>














<h1 class="text-4xl font-semibold text-gray-900">
    Ponudba
  </h1>

  <!-- Show this component on desktop -->
  <div class="hidden md:block">
    <div class="" style="display:grid; grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;">
            @auth
            @foreach($services as $service)
            <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-gray-800 dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
              <img class="h-64 w-full object-cover object-center" src="{{ asset('storage/images/services/'. $service->image) }}" alt="e-Storitve.com" />
              <div class="p-4">
                <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-200">{{ $service->title }} ({{$service->user_id}})</h2>
  
                <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-200">> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }}</h3>
  
                <p class="mb-2 text-semibold dark:text-gray-300 text-gray-200">{{ $service->description }}</p>
  
                <p class="mb-2 text-base dark:text-gray-300 text-gray-200">{{ $service->phone }}</p>
  
                <a href="{{ $service->url }}"><p class="mb-2 text-blue-600">{{ $service->url }}</p></a>
  
                <div class="flex items-center">
                  @if(!is_null($service->price))
                  <p class="mr-2 text-lg font-semibold text-gray-200 dark:text-white">
                  {{ $service->price }}€
                  </p>
                  @else
                  <p class="mr-2 text-lg font-semibold text-white dark:text-white">
                  Po dogovoru
                  </p>
                  @endif
                </div>
                <div class="flex items-center mt-1 text-white">
                {{$service->type}}
                </div>
              </div>
            </div>
            @endforeach
  
            @else
            @foreach($services as $service)
            <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-gray-800 dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
              <img class="h-64 w-full object-cover object-center" src="{{ asset('storage/images/services/'. $service->image) }}" alt="e-Storitve" />
              <div class="p-4">
                <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-200">{{ $service->title }}</h2>
  
                <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-200">> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }}</h3>
  
                <p class="mb-2 text-semibold dark:text-gray-300 text-gray-200">{{ $service->description }}</p>
  
                <p class="mb-2 text-base dark:text-gray-300 text-gray-200">{{ $service->phone }}</p>
  
                <a href="{{ $service->url }}"><p class="mb-2 text-blue-600">{{ $service->url }}</p></a>
  
                <div class="flex items-center">
                  @if(!is_null($service->price))
                  <p class="mr-2 text-lg font-semibold text-gray-200 dark:text-white">
                  {{ $service->price }}€
                  </p>
                  @else
                  <p class="mr-2 text-lg font-semibold text-white dark:text-white">
                  Po dogovoru
                  </p>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
            @endauth
    </div>
    </div>






    <!-- Hide this component on desktop -->
        <div class="block md:hidden">
        <div class="" style="display:grid; grid-template-columns: repeat(1, 1fr);
            grid-gap: 10px;">
 
           @auth
           @foreach($services as $service)
           <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-gray-800 dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
             <img class="h-64 w-full object-cover object-center" src="{{ asset('storage/images/services/'. $service->image) }}" alt="e-Storitve" />
             <div class="p-4">
               <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-200">{{ $service->title }} ({{$service->user_id}})</h2>
 
               <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-200">> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }}</h3>
 
               <p class="mb-2 text-semibold dark:text-gray-300 text-gray-200">{{ $service->description }}</p>
 
               <p class="mb-2 text-base dark:text-gray-300 text-gray-200">{{ $service->phone }}</p>
 
               <a href="{{ $service->url }}"><p class="mb-2 text-blue-600">{{ $service->url }}</p></a>
 
               <div class="flex items-center">
                 @if(!is_null($service->price))
                 <p class="mr-2 text-lg font-semibold text-gray-200 dark:text-white">
                 {{ $service->price }}€
                 </p>
                 @else
                 <p class="mr-2 text-lg font-semibold text-white dark:text-white">
                 Po dogovoru
                 </p>
                 @endif
               </div>
             </div>
           </div>
           @endforeach
 
           @else
           @foreach($services as $service)
           <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-gray-800 dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
             <img class="h-64 w-full object-cover object-center" src="{{ asset('storage/images/services/'. $service->image) }}" alt="e-Storitve" />
             <div class="p-4">
               <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-200">{{ $service->title }}</h2>
 
               <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-200">> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }}</h3>
 
               <p class="mb-2 text-semibold dark:text-gray-300 text-gray-200">{{ $service->description }}</p>
 
               <p class="mb-2 text-base dark:text-gray-300 text-gray-200">{{ $service->phone }}</p>
 
               <a href="{{ $service->url }}"><p class="mb-2 text-blue-600">{{ $service->url }}</p></a>
 
               <div class="flex items-center">
                 @if(!is_null($service->price))
                 <p class="mr-2 text-lg font-semibold text-gray-200 dark:text-white">
                 {{ $service->price }}€
                 </p>
                 @else
                 <p class="mr-2 text-lg font-semibold text-white dark:text-white">
                 Po dogovoru
                 </p>
                 @endif
 
               </div>
             </div>
           </div>
           @endforeach
           @endauth
     </div>
   </div>
 </div>