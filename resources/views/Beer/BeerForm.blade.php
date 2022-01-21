@extends("master")
@section("subtitle","upload your recipe")


@section("content")
<form action="/UploadBeer" method = "post">
    name <input type="text" name ="name" id ="name" value = "5"/><br/>
    tagline <input type="text" name="tagline" id="tagline" value = "5"/> <br/>
    first brewed <input type="text" name="first brewed" id="firstbrewed" value = "5"/><br/>
    Description <input type="text" name="Description" id="Description" value = "5"/><br/>
    image url <input type="text" name="image url" id="imageurl" value = "5"/><br/>
    abv <input type="text" name="abv" id="abv" value = "5"/><br/>
    ibu <input type="text" name="ibu" id="ibu" value = "5"/><br/>
    target_fg <input type="text" name="target_fg" id="target_fg" value = "5"/><br/>
    target_og <input type="text" name="target_og" id="target_og" value = "5"/><br/>
    ebc <input type="text" name="ebc" id="ebc" value = "5"/><br/>
    srm <input type="text" name="srm" id="srm" value = "5"/><br/>
    ph <input type="text" name="ph" id="ph" value = "5"/><br/>
    attenuation <input type="text" name="attenuation" id="attenuation" value = "5"/><br/>
    boil volume <input type="text" name="boil volume" id="boilvolume" value = "5"/><br/>
    boil volume unit <input type="text" name="boil volume" id="boilvolumeUnit" value = "5"/><br/>
    boil Time <input type="text" name="boil volume" id="boilTime" value = "5"/><br/>
    boil Time unit <input type="text" name="boil volume" id="boilTimeUnit" value = "5"/><br/>
    mash Temp <input type="text" name="boil volume" id="mashTemp" value = "5"/><br/>
    mash Temp Unit <input type="text" name="boil volume" id="mashTempUnit" value = "5"/><br/>
    mash Time <input type="text" name="boil volume" id="mashTime" value = "5"/><br/>
    boil volume unit <input type="text" name="boil volume" id="mashTimeUnit" value = "5"/><br/>
    food parings <input type="text" name="food parings" id="foodparings" value = "5"/><br/>
    tips <input type="text" name="tips" id="tips" value = "5"/><br/>
    maltName <input type="text" name="tips" id="maltName" value = "5"/><br/>
    maltAmount <input type="number" name="tips" id="maltAmount" value = "5"/><br/>
    maltUnit <input type="text" name="tips" id="maltUnit" value = "5"/><br/>
    hopsName <input type="text" name="tips" id="hopsName" value = "5"/><br/>
    hopsAmount <input type="number" name="tips" id="hopsAmount" value = "5"/><br/>
    hopsUnit <input type="text" name="tips" id="hopsUnit" value = "5"/><br/>
    yeastName <input type="text" name="tips" id="yeastName" value = "5"/><br/>
    yeastAmount <input type="number" name="tips" id="yeastAmount" value = "5"/><br/>
    yeastUnit <input type="text" name="tips" id="yeastUnit" value = "5"/><br/>
    contributer <input type="text" name="tips" id="Contributer" value = "5"/><br/>

    <input type ="submit" value = "Upload"/>
    <button type ="button" onclick = "uploadBeerAsyncPost()"><strong>upload via javascript met post</strong></button>
    
    <!--
    <script>
        alert($id);
    </script>
    -->
</form>

@stop
