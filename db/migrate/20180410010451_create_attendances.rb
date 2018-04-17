class CreateAttendances < ActiveRecord::Migration
  def change
    create_table :attendances do |t|
      t.date :dt
      t.references :animal, index: true, foreign_key: true
      t.references :vet, index: true, foreign_key: true
      t.text :obs

      t.timestamps null: false
    end
  end
end
