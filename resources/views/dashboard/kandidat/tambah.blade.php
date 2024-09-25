<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>tambah kandidat di pemilihan {{$pemilihan_id}}</h1>
    <form action={{route('kandidat.create', $pemilihan_id)}} method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: auto; padding: 1.5rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; background-color: #f7fafc;">
    @csrf
    <!-- Nomor Urut -->
    <input type="hidden" name="pemilihan_id" value="{{$pemilihan_id}}" style="display: none;">
    <div style="margin-bottom: 1rem;">
        <label for="nomor_urut" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Nomor Urut</label>
        <input type="number" name="nomor_urut" id="nomor_urut" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;" required>
    </div>

    <!-- Photo URL -->
    <div style="margin-bottom: 1rem;">
        <label for="photo_url" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Photo URL</label>
        <input type="file" name="photo_url" id="photo_url" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;">
    </div>

    <!-- Name -->
    <div style="margin-bottom: 1rem;">
        <label for="name" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Name</label>
        <input type="text" name="name" id="name" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;" required>
    </div>

    <!-- Description -->
    <div style="margin-bottom: 1rem;">
        <label for="description" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Description</label>
        <textarea name="description" id="description" rows="3" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;" required></textarea>
    </div>

    <!-- Visi -->
    <div style="margin-bottom: 1rem;">
        <label for="visi" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Visi</label>
        <textarea name="visi" id="visi" rows="2" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;" required></textarea>
    </div>

    <!-- Misi 1 -->
    <div style="margin-bottom: 1rem;">
        <label for="misi_1" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Misi 1</label>
        <textarea name="misi_1" id="misi_1" rows="2" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;" required></textarea>
    </div>

    <!-- Misi 2 -->
    <div style="margin-bottom: 1rem;">
        <label for="misi_2" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Misi 2</label>
        <textarea name="misi_2" id="misi_2" rows="2" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;" required></textarea>
    </div>

    <!-- Misi 3 -->
    <div style="margin-bottom: 1rem;">
        <label for="misi_3" style="display: block; font-size: 1rem; color: #4a5568; margin-bottom: 0.5rem;">Misi 3</label>
        <textarea name="misi_3" id="misi_3" rows="2" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.375rem;" required></textarea>
    </div>

    <!-- Submit Button -->
    <div style="text-align: center;">
        <button type="submit" style="background-color: #3182ce; color: white; padding: 0.75rem 1.5rem; border-radius: 0.375rem; border: none; cursor: pointer;" onmouseover="this.style.backgroundColor='#2b6cb0'" onmouseout="this.style.backgroundColor='#3182ce'">
            Submit
        </button>
    </div>
</form>

</body>
</html>