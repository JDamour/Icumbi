<span id="house_views"></span>

<form id="my_form" method="post" action="{{ route('set_view', $id) }}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>

<script >
    var form = document.getElementById('my_form');
    var view_el = document.getElementById('house_views');
    fetch("{{ route('get_view', $id) }}", {
        method: "GET"
    })
    .then(function (res) {
        return res.json();
    }).then(function (res) {
        console.log(res);
        view_el.innerHTML = res.size;
    }).catch(function (e) {
        console.log(e);
    });
    
    
    var formData = new FormData(form);
    window.addEventListener('load', function(e) {
        fetch("{{ route('set_view', $id) }}", {
            method: "POST",
            body: formData
        }).then(function(res) {
            return res.json();
        }).then(function (res) {
            console.log(res);
        }).catch(function (e) {
            console.log(e);
        });
    });
    
</script>