<x-student-layout>    
    <x-layout>
        <main class="ml-20 mr-20 mt-5">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <!-- Header Section -->
                <div class="border-b border-gray-200 mb-6">
                    <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">
                        Tambah Mata Kuliah
                    </h1>
                    <p class="text-gray-600 mb-4 text-center">
                        Pilih semester untuk melihat daftar mata kuliah yang tersedia.
                    </p>
                </div>
                <button class="bg-green-600 text-white font-medium py-2 px-4 rounded-lg">
                    Tambah
                </button>
                <a href="/student/krs" class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg ">
                    Batal
                </a>
                <!-- Semester Buttons -->
                <div class="flex flex-wrap justify-center mb-6">
                    <button onclick="showSemester(1)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 1
                    </button>
                    <button onclick="showSemester(2)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 2
                    </button>
                    <button onclick="showSemester(3)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 3
                    </button>
                    <button onclick="showSemester(4)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 4
                    </button>
                    <button onclick="showSemester(5)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 5
                    </button>
                    <button onclick="showSemester(6)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 6
                    </button>
                    <button onclick="showSemester(7)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 7
                    </button>
                    <button onclick="showSemester(8)" class="m-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                        Semester 8
                    </button>
                </div>

                <!-- Tables for each semester -->
                <div id="semester-1" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 1</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF101</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Algoritma dan Pemrograman</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Senin, 08:00 - 10:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="semester-2" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 2</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF102</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Matematika Diskrit</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">2</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Selasa, 10:00 - 12:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="semester-3" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 3</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF201</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Struktur Data</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Rabu, 08:00 - 10:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">4</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="semester-4" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 4</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF202</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Basis Data</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">4</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Kamis, 10:00 - 12:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="semester-5" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 5</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF301</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Pemrograman Web</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">5</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Jumat, 08:00 - 10:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="semester-6" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 6</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF301</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Pemrograman Web</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">5</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Jumat, 08:00 - 10:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="semester-7" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 7</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF301</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Pemrograman Web</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">5</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Jumat, 08:00 - 10:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="semester-8" class="semester-table hidden">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Semester 8</h2>
                    <div class="overflow-x-auto mb-4">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                    <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                    <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with dynamic data -->
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">1</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">IF301</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Pemrograman Web</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">5</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">Jumat, 08:00 - 10:00</td>
                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">3</td>
                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </x-layout>
</x-student-layout>

<script>
    function showSemester(semester) {
        const table = document.getElementById('semester-' + semester);
        if (table.classList.contains('hidden')) {
            // Hide all semester tables
            document.querySelectorAll('.semester-table').forEach(table => {
                table.classList.add('hidden');
            });
            // Show the selected semester table
            table.classList.remove('hidden');
        } else {
            // Hide the selected semester table
            table.classList.add('hidden');
        }
    }
</script>