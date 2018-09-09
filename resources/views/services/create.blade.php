<form action="{{ route(photos.store)}}">
    <input type="email"  placeholder="youremail@gmail.com" name="email" required />
    <input type="tel" placeholder="250780000000" name="tel" required />
    <input type="hidden" name="house_id" value="{{ $id }}" />    

</form>