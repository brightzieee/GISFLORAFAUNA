Database:
1. Flora dan Fauna -> tb_organism;
2. Conservation Area -> tb_area;
3. Reporting -> tb_report;
4. Admin -> tb_admin;
5. User -> tb_user;
6. Province, City, dan District -> tb_province, tb_city, tb_district;
================================================================================================================================================
Model:
1. Flora -> ModelOrganism;
2. Fauna -> ModelOrganism;
3. Conservation_Area -> ModelArea;
================================================================================================================================================
Controller Flora, Fauna, dan Conservation_Area
1. Diberi komentar ('//'), karena script error;
2. public function insertData tidak terpanggil;
================================================================================================================================================
Folder Report -> v_user_reporting
1. Di web ada search coloumn, tapi di script tidak ada;
2. Script copy, csv, excel, pdf, print, dan coloum visibility ada di ('index', 'bagian script "DataTables" setelah script JS);
================================================================================================================================================
