<x-layout>
    <h1 class="text-xl mb-5 font-bold">Create siswa</h1>
    <form action="#" method="POST" class="space-y-4 max-w-4xl">

      <!-- Nama -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" id="nama" name="nama" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 border-gray-300" />
      </div>

      <!-- Tanggal Lahir -->
      <div>
        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 border-gray-300" />
      </div>

      <!-- Jurusan -->
      <div>
        <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
        <input type="text" id="jurusan" name="jurusan" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 border-gray-300" />
      </div>

      <!-- Nilai -->
      <div>
        <label for="nilai" class="block text-sm font-medium text-gray-700">Nilai</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 border-gray-300" />
      </div>

      <!-- Mentor Dropdown -->
      <div>
        <label for="mentor_id" class="block text-sm font-medium text-gray-700">Mentor</label>
        <select id="mentor_id" name="mentor_id" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 border-gray-300">
          <option value="">-- Pilih Mentor --</option>
          @foreach ($mentors as $mentor )
            <option value="{{ $mentor->id }}">{{$mentor->nama}}</option>
          @endforeach
        </select>
      </div>

      <!-- Submit Button -->
      <div class="pt-4">
        <button type="submit" class="w-full bg-teal-600 text-white py-2 px-4 rounded-lg hover:bg-teal-700 transition duration-300">
          Simpan Data
        </button>
      </div>

    </form>
    <x-slot:footer>
        <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>
