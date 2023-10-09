$table->string('title', 255);
$table->text('description');
$table->dateTime('due_date');
$table->enum('status', ['Pendiente', 'En progreso', 'Completada']);