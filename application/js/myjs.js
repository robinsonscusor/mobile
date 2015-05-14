


	function validateSearch()
	{
		var keyword = $('#keyword').val();
		if(keyword.length < 3 || keyword.length > 20)
		{
			alert("Vui Lòng Nhập từ tìm kiếm từ 3 đế 20 kí tự");
			return false;
		}
	}

	function validateDelete()
	{
		if(confirm('bạn có muốn xóa?')){
			return true;
		}
		return false;
	}