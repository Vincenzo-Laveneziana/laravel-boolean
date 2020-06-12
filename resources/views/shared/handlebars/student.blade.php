<script id="student-template" type="text/x-handlebars-template">
    <a href="" class="student">
        <div class="info">
            <img src=" @{{ img }} " alt="@{{nome}}">

            <div class="info-person">
                <h3>@{{nome}}  (@{{eta}} anni)</h3>
                <p>@{{ azienda }} come @{{ruolo}} </p>
            </div>
        </div>

        <div class="description">
            <p>@{{descrizione}}</p>
        </div>
    </a>
</script>