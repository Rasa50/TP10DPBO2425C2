<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($reviewVM->reviews as $r): ?>
    <div class="bg-white p-6 rounded-lg shadow border-l-4 border-yellow-400 relative group">
        
        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity bg-white px-2 py-1 rounded shadow-sm z-10">
            <a href="index.php?page=reviews&action=edit&id=<?= $r->id ?>" class="text-blue-500 mr-2 hover:text-blue-700" title="Edit">
                <i class="fas fa-edit"></i>
            </a>
            <a href="index.php?page=reviews&action=delete&id=<?= $r->id ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Hapus ulasan ini?')" title="Hapus">
                <i class="fas fa-trash"></i>
            </a>
        </div>

        <div class="flex justify-between items-start mb-2">
            <div>
                <h4 class="font-bold text-gray-800"><?= $r->user_name ?></h4>
                <p class="text-xs text-gray-500">Main di: <?= $r->nama_lapangan ?></p>
            </div>
            <span class="bg-yellow-100 text-yellow-800 text-xs font-bold px-2 py-1 rounded h-fit">
                ⭐ <?= $r->rating ?>/5
            </span>
        </div>

        <p class="text-gray-600 text-sm italic mb-4">"<?= $r->komentar ?>"</p>
        
        <p class="text-xs text-gray-400 text-right border-t pt-2">
            Tgl Main: <?= $r->tanggal_booking ?>
        </p>
    </div>
    <?php endforeach; ?>
    
    <?php if(empty($reviewVM->reviews)): ?>
        <div class="col-span-full text-center py-10">
            <i class="fas fa-comments text-gray-300 text-5xl mb-3"></i>
            <p class="text-gray-500">Belum ada ulasan yang masuk.</p>
        </div>
    <?php endif; ?>
</div>