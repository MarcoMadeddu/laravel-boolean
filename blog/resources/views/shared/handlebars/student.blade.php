<script id="student-template" type="text/x-handlebars-template">
    <a href="{{ url('students/show') }}/@{{ 'slug' }}" class="student">
        <div class="student">
            <img src="@{{ 'img' }}" alt="@{{ 'nome' }}">
            <div class="info">
                <h3>@{{ 'nome' }} (@{{ 'eta' }})</h3>
                <h4>
                    @{{ 'assunzione' }}
                    da @{{ 'azienda'}} come @{{ 'ruolo' }}
                </h4>
                <p>@{{'descrizione'}}</p>
            </div>
        </div>
    </a>
</script>