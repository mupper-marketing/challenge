class CreateAnimals < ActiveRecord::Migration
  def change
    create_table :animals do |t|
      t.text :name
      t.integer :age
      t.text :specie
      t.text :breed
      t.text :obs

      t.timestamps null: false
    end
  end
end
