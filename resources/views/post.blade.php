<form action="/post" method="post">
    @csrf {{-- ต้องใส่เพื่อ ป้องกันการโจมตีส่งค่าทางฟอร์ม  --}}
    <input type="text" name="name" >
    <button type="submit">Submit</button>
</form>