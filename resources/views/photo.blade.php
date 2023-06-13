@foreach($photos as $photo)
<div align="center">
    <h1>Photos</h1>
    <table>
        <tbody>
            <tr>Автор - {{$photo->author}}</tr>
            <tr>Назва - {{$photo->name}}</tr>
            <tr>Опис - {{$photo->description}}</tr>
            <tr>Фото - {{$photo->url}}</tr>
            <tr>Хештеги - {{$photo->hashtags}}</tr>
            <tr>Дата опублікування - {{$photo->date}}</tr>
            <tr>Лайки - {{$photo->likes}}</tr>
        </tbody>
    </table>
</div>

    <a href="{{ route('photo.edit', $photo->id) }}" class="btn btn-primary">Edit photo</a>
@endforeach
